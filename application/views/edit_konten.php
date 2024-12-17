<style>
        :root {
            --green-tosca: #00bfae; 
            --light-gray: #f3f3f3; 
            --dark-gray: #333;
            --border-color: #ddd; 
        }

        .add-container {
            padding: 20px;
            background-color: var(--light-gray); 
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 30px auto;
        }

        .content h1 {
            color: var(--green-tosca);
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .input-field label {
            font-size: 16px;
            color: var(--dark-gray);
            font-weight: bold;
        }

        .input-field input,
        .input-field select,
        .input-field textarea {
            padding: 12px;
            font-size: 14px;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .input-field input:focus,
        .input-field select:focus,
        .input-field textarea:focus {
            border-color: var(--green-tosca);
            outline: none;
            box-shadow: 0 0 8px rgba(0, 191, 174, 0.2);
        }

        textarea {
            resize: vertical;
        }

        .add-button {
            background-color: var(--green-tosca);
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }

        .add-button:hover {
            background-color: #009e8b;
        }

        .col-sm-2 {
            font-size: 16px;
            color: var(--dark-gray);
        }

        .col-sm-10 {
            width: 100%;
        }

        input[type="file"] {
            padding: 10px;
        }

        .row.mb-3 {
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .col-sm-2,
            .col-sm-10 {
                width: 100%;
                display: block;
            }

            .add-container {
                padding: 15px;
                margin: 10px;
            }

            .content h1 {
                font-size: 24px;
            }
        }
    </style>
<center>
<div class="add-container">
    <!-- Content Start -->
    <div class="content">
        <!-- Form Start -->
        <div class="col-sm-12 col-xl-6">
            <form action="<?= site_url('konten/update'); ?>" method="post" enctype="multipart/form-data">
                <div class="input-field">
                    <h1>Edit Konten</h1>
                    
                    <input type="hidden" name="id_konten" value="<?= $this->uri->segment(3, 0) ?>">
<input type="hidden" name="nama_foto" value="<?= $konten->foto?>">
                    <div class="row mb-3">
                        <label for="judul" class="col-sm-2 col-form-label">Judul Konten</label>
                        <div class="col-sm-10">
                            <input type="text" id="judul" name="judul" placeholder="Masukkan Judul Konten Anda" value="<?= htmlspecialchars($konten->judul) ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select name="id_kategori" id="kategori" required>
                                <?php foreach ($kategori as $categories) { ?>
                                    <option value="<?= $categories['id_kategori'] ?>">
                                    <?= $categories['nama_kategori']?> 
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="keterangan" class="col-sm-2 col-form-label">Isi Konten</label>
                        <div class="col-sm-10">
                            <textarea id="keterangan" name="keterangan" cols="30" rows="10" required><?= htmlspecialchars($konten->keterangan) ?></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" id="tanggal" name="tanggal" value="<?= htmlspecialchars($konten->tanggal) ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" id="foto" name="foto" value="<?= htmlspecialchars($konten->foto) ?>" accept="*">
                        </div>
                    </div>

                    <button type="submit" class="add-button">Update</button>
                </div>
            </form>
        </div>
        <!-- Form End -->
    </div>
</div>
</center>