$(document).ready(function () {
    $(".btnaddformapd").click(function (e) {
        e.preventDefault();
        $("#formtambahapd").prepend(` 
        <tr>
        <td>
          <select name="id_card" id="id_card" class="form-control mb-2 mt-2">
            <?php foreach ($administrasi as $company) : ?>
              <option value="<?php echo $company->id ?>" <?php if ($company->id == $nama_pekerja->id) echo 'selected'; ?>>
                <?php echo $company->administrasi ?>
              </option>
            <?php endforeach; ?>
          </select>
        </td>
        <td>
          <input type="text" class="form-control mb-2 mt-2" id="pekerja" name="pekerja">
        </td>
        <td>
          <select name="id_card" id="id_card" class="form-control mb-2 mt-2">

            <option value="Ya">Ada</option>
            <option value="Tidak">Tidak</option>

          </select>
        </td>
        <td>
          <select name="id_card" id="id_card" class="form-control mb-2 mt-2">

            <option value="Ya">Ya</option>
            <option value="Tidak">Tidak</option>

          </select>

        </td>
        <td>
          
                          <button type="button" class="btn btn-info btnhapusformpekerja mt-2">
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
});