$(document).ready(function () {
  $(".btnaddformpekerja").click(function (e) {
    e.preventDefault();
    $("#formtambahpekerja").prepend(` 
          <tr>        
          <td>
                    <input type="text" class="form-control mb-2 mt-2" id="nama_pekerja" name="nama_pekerja[]">
                  </td>
                  <td>
                    <select name="training[]" id="training" class="form-control mb-2 mt-2">

                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>

                    </select>

                  </td>
                  <td>
                    <select name="id_card[]" id="id_card" class="form-control mb-2 mt-2">

                      <option value="Ya">Ada</option>
                      <option value="Tidak">Tidak</option>

                    </select>
                  </td>
                  <td>
  
                  <button type="button" class="btn btn-danger btnhapusformpekerja mt-2">
                    <i class="fa fa-trash"></i>
                  </button>
                </td>
              </tr>                   
        `)
  });
  $(document).on('click', '.btnhapusformpekerja', function (e) {
    e.preventDefault();
    let row_item = $(this).parent().parent();
    $(row_item).remove();
  });

  //ajax request to insert all form data
  $("#addformpekerja").submit(function (e) {
    e.preventDefault();
    $("#addbtnpekerja").val('Adding...');
    $.ajax({
      // url: "<?= base_url('User/ simpanDataPekerja'); ?>",  coba, durung mas
      url: BASE_URL + 'User/simpanDataPekerja',
      //berarti drng konek
      method: 'post',
      data: $(this).serialize(),
      success: function (response) {
        console.log(BASE_URL);
      }
    })
  })
});