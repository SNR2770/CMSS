<style>
        :root {
            --green-tosca: #00bfae; 
            --light-gray: #f3f3f3; 
            --dark-gray: #333;
            --border-color: #ddd;
            --button-hover: #009e8b; 
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

        .form-check {
            margin-bottom: 15px;
        }

        .form-check input[type="radio"] {
            margin-right: 10px;
        }

        .form-check label {
            font-size: 16px;
            color: var(--dark-gray);
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
            background-color: var(--button-hover);
        }

        .col-sm-2 {
            font-size: 16px;
            color: var(--dark-gray);
        }

        .col-sm-10 {
            width: 100%;
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
                <form action="<?= base_url('user/simpan')?>" method="post">

                        <div class="input-field">
                            <h1>Registrasi</h1>
                            <form>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="nama" placeholder="Masukkan Nama Anda" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="username" placeholder="Masukkan Username Anda" >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                    <input type="password" name="password" placeholder="Masukkan Password Anda" >
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="add-button">Registrasi</button>
                            </form>
                        </div>
                    </div>
            <!-- Form End -->
        </div>
</center>