$(document).ready(function () {
    $(".add_item_btn_pekerja").click(function (e) {
        e.preventDefault();
        $("#show_item_3").prepend(` 
        <form action="<?= base_url('User/simpanDataPekerja'); ?>" method="POST">
                                            <div class="form-group">
                                                <label>Nama Pekerja</label>
                                                <input type="" class="form-control mb-2" id="pekerja" name="pekerja">
                                                <label>ID Card</label>
                                                <select class="form-control mb-2" id="exampleFormControlSelect1" aria-placeholder="jumlah">
                                                    <option>Ada</option>
                                                    <option>Tidak</option>
                                                </select>
                                                <label>Training HPW</label>
                                                <select class="form-control mb-2" id="exampleFormControlSelect1" aria-placeholder="jumlah">
                                                    <option>Ada</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                            <button type="button" name="add" id="add" class="btn btn-success add_item_btn_pekerja mb-4">
                                                Add More
                                            </button> <br>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
            <button type="button" name="remove" id="remove" class="btn btn-danger remove_item_btn_pekerja">
                                    Remove
                                </button>
    `)
    });
    $(document).on('click', '.remove_item_btn_pekerja', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });
});