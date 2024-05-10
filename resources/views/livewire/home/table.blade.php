<div>
    <div class="card">
        <div class="table-responsive">
            <table class="table table-sm table-vcenter table-hover table-bordered card-table">
                <thead>
                    <tr>
                        <th class="fs-3"></th>
                        @for ($i = 1; $i <= $headers; $i++)
                            <th class="fs-3 text-center">{{ $i }}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= $bodies; $i++)
                        <tr class="fs-3 text-center">
                            <td>{{ $i }}</td>
                            @for ($e = 1; $e <= $headers; $e++)
                                <td>
                                    <input type="text" wire:model="data.{{ $i }}.{{ $e }}"
                                        wire:change="update({{ $i }}, {{ $e }})"
                                        @if (isset($data[$i][$e])) style="background-color:green;color:white" @endif>
                                </td>
                            @endfor
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
