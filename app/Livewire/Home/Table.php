<?php

namespace App\Livewire\Home;

use App\Models\Data;
use Livewire\Component;

class Table extends Component
{
    public $data = [];

    public function mount()
    {
        $data = Data::get();

        foreach($data as $d) {

            $this->data[$d->row][$d->column] = $d->content;

        }
    }

    public function update($row, $column)
    {
        if ($this->data[$row][$column] !== '') {

            Data::create([
                'content'   => $this->data[$row][$column],
                'row'       => $row,
                'column'    => $column
            ]);
            
            $this->dispatch('success', 'Data untuk Kamar ' . $column . ' Tanggal ' . $row . ' berhasil di Simpan');

        } else {

            Data::where('row', $row)->where('column', $column)->delete();

            unset($this->data[$row][$column]);

            $this->dispatch('error', 'Data untuk Kamar ' . $column . ' Tanggal ' . $row . ' berhasil di Hapus');

        }      
    }

    public function render()
    {
        return view('livewire.home.table', [
            'headers'   => 10,
            'bodies'    => 31
        ]);
    }
}
