<section class="mb-5">
          <div class="card card-custom p-4">
            <h2 class="h5 mb-3">Tambah Post Baru</h2>
            <div class="col-lg-8">
              <form method="post" action="/dash/posts" enctype="multipart/form-data">
                  @csrf
                <div class="mb-3">
                  <label for="title" class="form-label">Judul Post</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="iair-judul-posting" name="title" required value="{{ old('title') }}"/>
                </div>
                <div class="mb-3">
                  <label for=" slug" class="form-label">Slug</label>
                  <input class="form-control @error('slug') is-invalid @enderror" type="text" name="slug" id="iair-slug" placeholder="masukkan sesuai judul. ex : judul-tanpa-spasi" required value="{{ old('slug')}}"/>
                </div>
                <div class="mb-3">
                  <label for="body" class="form-label">body</label>
                  <input id="x" type="hidden" name="body">
                  <trix-editor input="x"></trix-editor>
                </div>
                <div class="mb-3">
                  <label for="author" class="form-label">Penulis</label>
                  <input type="text" class="form-control @error('author') is-invalid @enderror" id="iair-author" name="author" required />
                </div>
                <input type="file" name="image" required>
                <button type="submit" class="btn btn-primary">Kirim</button>
              </form>
            </div>
          </div>
        </section>