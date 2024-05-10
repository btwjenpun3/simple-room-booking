<?php

namespace App\Livewire\Booking;

use App\Models\Booking;
use Livewire\Component;

class Table extends Component
{
    public $type; 

    public $data = [];

    public $roomsC = ['C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7', 'C8', 'C9', '10', 'C11', 'C12', 'C13', 'C14', 'C15'];

    public $roomsM = ['M1', 'M2', 'M3', 'M4', 'M5', 'M6', 'M7', 'M8', 'M9', 'M10', 'M11', 'M12', 'M21', 'M22m', 'M23', 'M24', 'M25', 'M26', 'M27', 'M28', 'M29', 'M30', 'M31', 'M32', 'M33', 'M34', 'M35', 'M36'];


    public function mount()
    {
        $data = Booking::get();

        foreach($data as $d) {

            $this->data[$d->date][$d->room] = $d->content;

        }
    }

    public function update($date, $room)
    {
        if ($this->data[$date][$room] !== '') {

            $booking = Booking::where('date', $date)->where('room', $room)->first();

            if (!$booking) {

                Booking::create([
                    'content'   => $this->data[$date][$room],
                    'date'      => $date,
                    'room'      => $room
                ]);
                
                $this->dispatch('success', 'Data untuk Kamar ' . $room . ' Tanggal ' . $date . ' berhasil di Simpan');

            } else {
                $booking->update([
                    'content'   => $this->data[$date][$room],
                    'date'      => $date,
                    'room'      => $room
                ]);
                
                $this->dispatch('success', 'Data untuk Kamar ' . $room . ' Tanggal ' . $date . ' berhasil di Simpan');
            }           

        } else {

            Booking::where('date', $date)->where('room', $room)->delete();

            unset($this->data[$date][$room]);

            $this->dispatch('error', 'Data untuk Kamar ' . $room . ' Tanggal ' . $date . ' berhasil di Hapus');

        }      
    }

    public function render()
    {
        if ($this->type === 'C') {
            $rooms = $this->roomsC;
        } elseif ($this->type === 'M') {
            $rooms = $this->roomsM;
        }
        return view('livewire.booking.table', [
            'rooms'   => $rooms,
            'date'    => 31
        ]);
    }
}
