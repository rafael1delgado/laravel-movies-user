<?php

namespace App\Http\Livewire\Movie;

use App\Http\Requests\Movie\MovieStoreRequest;
use App\Http\Requests\Movie\MovieUpdateRequest;
use App\Models\Country;
use App\Models\Movie;
use Livewire\Component;

class MovieManage extends Component
{
    public $id_movie;
    public $name;
    public $genre;
    public $release_year;
    public $country_id;
    public $remake;

    public $mode;

    protected function getListeners()
    {
        return [
            'editMovie' => 'loadMovie'
        ];
    }

    public function render()
    {
        return view('livewire.movie.movie-manage');
    }

    public function mount()
    {
        $this->id_movie = null;
        $this->mode = "create";
        $this->countries = $this->getCountries();
    }

    public function create()
    {
        $dataValidated = $this->validate((new MovieStoreRequest())->rules());
        Movie::create($dataValidated);
        $this->resetInput();
        $this->emitTo('movie.movie-index', '$refresh');
        session()->flash('success', __('The movie was created successfully'));
    }

    public function edit()
    {
        $dataValidated = $this->validate((new MovieUpdateRequest())->rules());
        $movie = Movie::find($this->id_movie);
        $movie->update($dataValidated);
        $this->resetInput();
        $this->emitTo('movie.movie-index', '$refresh');
        session()->flash('success', __('The movie was updated successfully'));
    }

    public function loadMovie(Movie $movie)
    {
        $this->mode = "edit";
        $this->id_movie = $movie->id;
        $this->name = $movie->name;
        $this->genre = $movie->genre;
        $this->release_year = $movie->release_year;
        $this->country_id = $movie->country_id;
        $this->remake = $movie->remake;
    }

    public function resetInput()
    {
        $this->mode = "create";
        $this->reset([
            'id',
            'name',
            'genre',
            'release_year',
            'country_id',
            'remake',
        ]);
    }

    public function getCountries()
    {
        return Country::orderBy('name')->get();
    }
}
