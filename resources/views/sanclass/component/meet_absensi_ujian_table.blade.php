<div class="card">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">
                    <a href="" class="btn btn-danger btn-xs m-0 p-0" type="button" title="edit"><i
                            class="fa fa-trash text-light fa-lg"></i></a>
                </th>
                <th class="">Nomor</th>
                <th class="">Nama Siswa</th>
                <th class="">Ujian</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @php
                    $num = ($data->currentPage() - 1 ) * $data->perPage() + 1;
                    @endphp --}}

            <tr>
                <th class="text-center">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                </th>
                <th>1</th>
                <th>Mbah Marijan</th>
                <th class="text-danger">Absen</th>
                <td class="text-center">
                    {{-- component button delete --}}
                    @component('layouts/component/button_delete')

                    @endcomponent
                    <a href="" class="btn btn-light btn-xs" type="button" title="edit" data-toggle="modal"
                        data-target="#edit"><i class="fa fa-download text-primary fa-lg"></i></a>
                </td>
            </tr>

        </tbody>
    </table>
</div>