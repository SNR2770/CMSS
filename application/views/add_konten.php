<style>
        :root {
            --green-tosca: #00bfae;
        }

        .add-container {
            padding: 20px;
            background-color: #f3f3f3;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 30px auto;
        }

        .content h1 {
            color: var(--green-tosca);
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .input-field label {
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }

        .input-field input,
        .input-field select,
        .input-field textarea {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .input-field input:focus,
        .input-field select:focus,
        .input-field textarea:focus {
            border-color: var(--green-tosca);
            outline: none;
        }

        .add-button {
            background-color: var(--green-tosca);
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }

        .add-button:hover {
            background-color: #009e8b;
        }

        textarea {
            resize: vertical;
        }

        .col-sm-2 {
            font-size: 16px;
            color: #333;
        }

        .col-sm-10 {
            width: 100%;
        }

        input[type="text"],
        input[type="date"],
        input[type="file"] {
            width: 100%;
        }
    </style>

<center>
<div class="add-container">
        <!-- Content Start -->
        <div class="content">
            <!-- Form Start -->
            <div class="col-sm-12 col-xl-6">
            <form action="<?= site_url('konten/simpan'); ?>" method="post" enctype="multipart/form-data">
                        <div class="input-field">
                            <h1>Tambah konten</h1>
                            <form>
                                <div class="row mb-3">
                                    <input type="hidden" name="id_konten" value="<?= $this->uri->segment(3, 0)?>">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Judul Konten</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="judul" placeholder="Masukkan Judul Konten Anda" >
                                    </div>
                                    <br>
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kategori</label>
                                    <div class="col-sm-10">
                                    <select name="id_kategori" id="">
                                        <?php foreach($kategori as $categories){?>
                                        <option value="<?= $categories['id_kategori']?>"><?= $categories['nama_kategori']?></option>
                                        <?php } ?>
                                    </select>
                                    </div>
                                    <br>
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Isi Konten</label>
                                    <div class="col-sm-10">
                                    <textarea name="keterangan" id="" cols="30" rows="10">
                                        
                                    </textarea>
                                    </div>
                                    <br>
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                    <input type="date" name="tanggal" placeholder="Tanggal">
                                    </div>
                                     <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10">
                                    <input type="file" name="foto" accept="image/png, image/jpeg" >
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="add-button">Add</button>
                                </form>
                          
                        </div>
                    </div>
                    
            <!-- Form End -->
        </div>
</center>