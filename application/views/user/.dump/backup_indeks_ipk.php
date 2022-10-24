<a class="dropdown-item" href="<?= base_url('user/form_wizard2'); ?>">test wizard</a>
<a class="dropdown-item" href="<?= base_url('user/jsa'); ?>">test jsa</a>
<a class="dropdown-item" href="<?= base_url('user/test_modal'); ?>">modal</a>
<a class="dropdown-item" href="<?= base_url('user/form_multistep'); ?>">test multistep</a>
<a class="dropdown-item" href="<?= base_url('user/check_list'); ?>">test check</a>
<a class="dropdown-item" href="<?= base_url('user/test'); ?>">test modal</a>


<th>Company</th>
<td>
    <select name="id_card" id="id_card" class="form-control mb-2 mt-2">
        <?php foreach ($administrasi as $company) : ?>
            <option value="<?php echo $company->id ?>" <?php if ($company->id == $nama_pekerja->id) echo 'selected'; ?>>
                <?php echo $company->administrasi ?>
            </option>
        <?php endforeach; ?>
    </select>
</td>