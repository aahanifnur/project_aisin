$(document).ready(function () {
    $(".add_item_btn_pengawas").click(function (e) {
        e.preventDefault();
        $("#show_item_2").prepend(` 
    <div class="card-body">
    <form>
    <div class="form-group">
        <label>User</label>
        <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label>Safety Officer</label>
        <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label>P2K3L</label>
        <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
    </div>
    <button type="button" name="remove" id="remove" class="btn btn-danger remove_item_btn_pengawas">Remove
    </button>
    </form>
    </div>
    `)
    });
    $(document).on('click', '.remove_item_btn_pengawas', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });
});