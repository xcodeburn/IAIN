<section>
    <h2 class="h5 mb-3">Daftar Post Terbaru</h2>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
              {{-- {{ $data }} --}}
                @foreach ($data as $index => $post)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $post->author ?? 'N/A' }}</td> <!-- Pastikan author ada -->
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
