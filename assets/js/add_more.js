$(document).ready(function () {
    $(".add_item_btn").click(function (e) {
        e.preventDefault();
        $("#show _item").prepend(`
        <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Nama AKK / APD</label>
                                            <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
                                            <select class="form-control" id="exampleFormControlSelect1" aria-placeholder="jumlah">
                                                <option>OK</option>
                                                <option>NG</option>
                                            </select>
                                        </div>

                                        <button type="button" name="add" id="add" class="btn btn-success add-more">
                                            Add More
                                        </button>

                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                    </form>
                                </div>
                            `)
    });
    $(document).on('click', '.remove_item_btn', function (e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
    });


    // pending................................................... iki nggo insert data ng db
    // ajax request to insert all form data --- pending ndisik ya
    // $("#add_form").submit(function(e) {
    //     e.preventDefault();
    //     $("#add_btn").val('Adding...');
    //     $.ajax({
    //         url: 'action.php',
    //         method: 'post',
    //         data: $(this).serialize(),
    //         success: function(response) {
    //             console.log(response);
    //         }
    //     })
    // })
});