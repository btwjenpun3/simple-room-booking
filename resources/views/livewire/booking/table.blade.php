<div>
    <div class="card">
        <div class="table-respsonsive">
            <table class="table table-sm table-vcenter table-hover table-bordered card-table">
                <thead class="sticky-table">
                    <tr>
                        <th class="fs-3"></th>
                        @foreach ($rooms as $room)
                            <th class="fs-3 text-center" style="background-color:antiquewhite">{{ $room }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= $date; $i++)
                        <tr class="fs-3 text-center">
                            <td>{{ $i }}</td>
                            @foreach ($rooms as $room)
                                <td>
                                    <input type="text" wire:model="data.{{ $i }}.{{ $room }}"
                                        wire:change="update({{ $i }}, '{{ $room }}')"
                                        @if (isset($data[$i][$room])) style="background-color:green;color:white" @endif>
                                </td>
                            @endforeach
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    @script
        <script>
            $wire.on('success', (data) => {
                Toastify({
                    text: data,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top",
                    position: "center",
                    stopOnFocus: true,
                    style: {
                        background: "green",
                    },
                }).showToast();
            });
            $wire.on('error', (data) => {
                Toastify({
                    text: data,
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top",
                    position: "center",
                    stopOnFocus: true,
                    style: {
                        background: "yellow",
                        color: 'black'
                    },
                }).showToast();
            })
        </script>
    @endscript
</div>
