<?php $this->load->view('header'); ?>
<h3>Ajax ile Codeigniter'da Temel İşlemler</h3>
<div class="row">
    <div class="col-md-9">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th width="40">ID</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Adres</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
    <div class="col-md-3">
        <form id="sidebar">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="number" id="id" name="id" class="form-control" placeholder="Benzersiz Id">
            </div>
            <div class="form-group">
                <label for="ad">Ad</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Ad">
            </div>
            <div class="form-group">
                <label for="soyad">Soyad</label>
                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Soyad">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="telefon">Telefon</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Telefon">
            </div>
            <div class="form-group">
                <label for="adres">Adres</label>
                <textarea name="address" id="address" class="form-control" placeholder="Adres"></textarea>
            </div>
            <button type="button" id="save" class="btn btn-primary" onclick="saveData()" >Ekle</button>
            <button type="button" id="update" class="btn btn-success" onclick="updateData()" >Güncelle</button>
        </form>
    </div>
</div>
<?php $this->load->view('footer'); ?>