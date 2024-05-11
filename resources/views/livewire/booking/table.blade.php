<div>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-sm table-vcenter table-hover table-bordered card-table">
                <thead>
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
                                    <div class="d-flex justify-content-between">
                                        <input type="text" wire:model="data.{{ $i }}.{{ $room }}"
                                            wire:change="update({{ $i }}, '{{ $room }}')"
                                            @if (isset($data[$i][$room])) style="background-color:green;color:white" @endif
                                            placeholder="{{ $room }} Tanggal {{ $i }}">
                                        @if (isset($data[$i][$room]))
                                            <button class="btn btn-icon"
                                                wire:click="deleteConfirm({{ $i }}, '{{ $room }}')"
                                                data-bs-toggle="modal" data-bs-target='#delete-modal'>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="#f50505" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-xbox-x">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M12 21a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9a9 9 0 0 0 -9 9a9 9 0 0 0 9 9z" />
                                                    <path d="M9 8l6 8" />
                                                    <path d="M15 8l-6 8" />
                                                </svg>
                                            </button>
                                        @endif
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal modal-blur fade" id="delete-modal" tabindex="-1" role="dialog" aria-hidden="true"
        wire:ignore.self>
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Hapus?</div>
                    <div>Hapus Data Booking untuk kamar {{ $deleteRoom }} tanggal {{ $deleteDate }}</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link link-secondary me-auto"
                        data-bs-dismiss="modal">Tidak</button>
                    <button type="button" class="btn btn-danger" wire:click="delete" data-bs-dismiss="modal">
                        Hapus
                    </button>
                </div>
            </div>
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
