@extends('layouts.main');
@section('container')
;
<div class="container-login">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Login</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="" method="POST">
                        <table>

                            <tr>
                                <td>Nama</td>
                                <td>
                                    <div class="input-field">
                                        <span class="far fa-user px-2"></span>
                                        <input type="text" placeholder="Nama" name="nama_user" required>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>No Meja</td>
                                <td>
                                    <div class="input-field">
                                        <span class="fas fa-lock px-2"></span>
                                        <input type="text" placeholder="Nomor Meja" name="no_meja" required>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <button class="btn btn-primary btn-block mt-3" name="masuk" type="submit">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection