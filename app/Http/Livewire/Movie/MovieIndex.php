<?php

namespace App\Http\Livewire\Movie;

use App\Models\Movie;
use Livewire\Component;

class MovieIndex extends Component
{
    protected function getListeners()
    {
        return [
            '$refresh'
        ];
    }

    public function render()
    {
        return view('livewire.movie.movie-index', [
            'movies' => $this->getMovies()
        ]);
    }

    public function getMovies()
    {
        return Movie::orderByDesc('created_at')->get();
    }

    public function edit(Movie $movie)
    {
        $this->emit('editMovie', $movie);
    }

    public function delete(Movie $movie)
    {
        $movie->delete();
    }
}
