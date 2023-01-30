@extends('layouts.cekout')

@section('title', 'CekOut')

@section('content')
    <main>
        <section class="section-detail-header">

        </section>
        <section class="section-detail-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item ">
                                    Detail
                                </li>
                                <li class="breadcrumb-item active">
                                    CekOut
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-detail">
                            <h1>Who is Going?</h1>
                            <p>
                                Trip to Ubud, Bali, Indonesia
                            </p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>Visa</td>
                                            <td>Paspor</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="/frontend/images/foto.png" width="60">
                                            </td>
                                            <td class="align-middle">
                                                Angga Risky
                                            </td>
                                            <td class="align-middle">
                                                CN
                                            </td>
                                            <td class="align-middle">
                                                N/A
                                            </td>
                                            <td class="align-middle">
                                                Activied
                                            </td>
                                            <td class="align-middle">
                                                <a href="">
                                                    <img src="/frontend/images/ic_remove.png" alt="">
                                                </a>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="/frontend/images/foto1.png" width="60">
                                            </td>
                                            <td class="align-middle">
                                                Galih Pratama
                                            </td>
                                            <td class="align-middle">
                                                SG
                                            </td>
                                            <td class="align-middle">
                                                30 Days
                                            </td>
                                            <td class="align-middle">
                                                Activied
                                            </td>
                                            <td class="align-middle">
                                                <a href="">
                                                    <img src="/frontend/images/ic_remove.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form class="form-inline">
                                    <label class="sr-only" for="inputUsername">Name</label>
                                    <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername"
                                        placeholder="Username" />

                                    <label class="sr-only" class="mr-2"
                                        for="inlineFormCustomSelectPref">Preference</label>
                                    <select class="custom-select mb-2 mr-sm-2" id="inlineFormCustomSelectPref">
                                        <option selected value="">VISA</option>
                                        <option value="2">30 Days</option>
                                        <option value="3">N/A</option>
                                    </select>

                                    <label class="sr-only" for="doePassport">DOE Passport</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" class="form-control datepicker" id="doePassport"
                                            placeholder="DOE Passport" />
                                    </div>

                                    <button type="submit" class="btn btn-add-now mb-2 px-4">
                                        Add Now
                                    </button>
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You are only able to invite member that has registered in Nomads.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-detail card-right">
                            <h2>Checkout Informations</h2>
                            <table class="trip-informasi">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-right">
                                        2 person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional VISA</th>
                                    <td width="50%" class="text-right">
                                        $ 190,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">
                                        $ 80,00 / person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Sub Total</th>
                                    <td width="50%" class="text-right">
                                        $ 280,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total (+Unique Code)</th>
                                    <td width="50%" class="text-right">
                                        <span class="text-blue">$ 279,</span> <span class="text-yellow">33</span>
                                    </td>
                                </tr>

                            </table>
                            <hr>
                            <h2>Payment Instructions</h2>
                            <p class="payment-ints">Please complete your payment before to <br>
                                continue the wonderful trip</p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="/frontend/images/ic_bank.png" class="bank-image">
                                    <div class="deskripsi">
                                        <h3>
                                            PT Nomads ID
                                        </h3>

                                        <p>
                                            0881 8829 8800
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="/frontend/images/ic_bank.png" class="bank-image">
                                    <div class="deskripsi">
                                        <h3>
                                            PT Nomads ID
                                        </h3>

                                        <p>
                                            0899 8501 7888
                                            <br>
                                            Bank HSBC
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{ url('/cekout/sukses') }}" class="btn btn-block btn-join-now mt-3 my-2">I Have Made Payment</a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ url('/detail') }}" class="text-muted">
                                Cancel Booking
                            </a>
                        </div>
                    </div>
                </div>
        </section>
    </main>
@endsection

@push('prepend-style')
  <link rel="stylesheet" href="{{ url('frontend/libraries/combined/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
  <script src="{{ url('frontend/libraries/combined/js/gijgo.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4',
        icons: {
          rightIcon: '<img src="{{ url('frontend/images/ic_doe.png') }}" />'
        }
      });
    });
  </script>
@endpush
