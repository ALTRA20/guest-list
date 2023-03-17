<style>
.cardFilterForm{
  margin-left: 15px;
}
.cardFilterFormList{
  display: block;
}
label{
  display: block;
}
</style>
<div class="cardFilter modal fade" id="filter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black!important;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="cardFilterTop modal-header border-0">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Filter Data</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="cardFilterBody modal-body">
              <span class="">Urut Berdasarkan</span>
              <form action="{{ route('post.sort.year') }}" method="POST">
                @csrf
                <label for="name">
                  <input type="radio" name="filter" id="name" value="name">
                  nama
                </label>
                <label for="oldest">
                  <input type="radio" name="filter" id="oldest" value="oldest">
                  terlama
                </label>
                <label for="recently">
                  <input type="radio" name="filter" id="recently" value="recently">
                  terbaru
                </label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
              </form>
            </div>
          </div>
        </div>
      </div>