<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SINDHU SEWA PARISHAD (REG.)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: url("https://i.imgur.com/GMmCQHC.png");
            background-repeat: no-repeat;
            background-size: 100% 100%
        }

        .inp {
            border: none;
            border-bottom: 1px solid #000000;
            padding: 5px 10px;
            outline: none;
        }

        .select {
            border: none;
            border-bottom: 1px solid #000000;
            padding: 5px 10px;
            margin-top: 9px;
            outline: none;
        }

        [placeholder]:focus::-webkit-input-placeholder {
            transition: text-indent 0.4s 0.2s ease;
            text-indent: -100%;
            opacity: 1;
        }

        .card {
            padding: 30px 40px;
            margin-top: 60px;
            margin-bottom: 60px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
        }

        .blue-text {
            color: #00BCD4
        }

        .form-control-label {
            margin-bottom: 0
        }

        input,
        textarea,
        button {
            padding: 8px 15px;
            border-radius: 5px !important;
            margin: 5px 0px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            font-size: 18px !important;
            font-weight: 300
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #00BCD4;
            outline-width: 0;
            font-weight: 400
        }

        .btn-block {
            text-transform: uppercase;
            font-size: 15px !important;
            font-weight: 400;
            height: 43px;
            cursor: pointer
        }

        .btn-block:hover {
            color: #fff !important
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }
    </style>
</head>

<body>

    <div class="container-fluid px-1 py-5 mx-auto">
        <!-- Notifications Start-->
        @if ($msg = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $msg }}</strong>
        </div>

        @elseif (Session::get('faild'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('faild') }}</strong>
        </div>

        @elseif (Session::get('delete'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('delete') }}</strong>
        </div>
        @endif
        <!-- Notifications End-->
        <div class="row d-flex justify-content-center">
            <div class="col-xl-10 col-lg-11 col-md-12 col-11 text-center">
                <h3>SINDHU SEWA PARISHAD (REG.)</h3>
                <p class="text-dark">"Sindhu Bhawan" Kranti Kraplani Nagar, Indore</p>

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-4"></div>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-1"></div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-3 ms-5">
                        <h5 class="bg-dark text-white p-1 rounded-pill">SINDHU SAMAJ SURVEY</h5>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-4"></div>
                </div>
                <h6> (Area Indore Muncipal Corporation) Sepetember, Oct. 2022 </h6>
                <div class="card">
                    <form method="POST" action="{{ route('addSurvey') }}" class="form-card">
                        @csrf
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-3 flex-column d-flex"> <label class="form-control-label px-3">Family Head Name :<span class="text-danger"> *</span></label> <input type="text" class="inp" id="family_head_name" name="family_head_name" placeholder="Enter Family Head Name" onblur="validate(6)" value="{{ old('family_head') }}" required>
                                <span class="text-danger">
                                    @error('family_head_name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-4 flex-column d-flex"> <label class="form-control-label px-3">Father Name :<span class="text-danger"> *</span></label> <input type="text" class="inp" id="father_name" name="father_name" placeholder="Enter Father Name" onblur="validate(6)" value="{{ old('father_name') }}" required>
                                <span class="text-danger">
                                    @error('father_name')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                                <div class="form-group col-3 flex-column d-flex"> <label class="form-control-label px-3">Surname :<span class="text-danger"> *</span></label> <input type="text" class="inp" id="surname" name="surname" placeholder="Enter Surname" onblur="validate(6)" value="{{ old('surname') }}" required>
                                    <span class="text-danger">
                                        @error('surname')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <div class="row justify-content-between text-left">
                                    <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">
                                        Address :<span class="text-danger"> *</span></label> <textarea class="inp" id="address" name="address" placeholder="Enter Address" rows="8" onblur="validate(3)" required>{{ old('address') }}</textarea>
                                        <span class="text-danger">
                                            @error('address')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="row col-sm-6">
                                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Ward No :<span class="text-danger"> *</span></label> <input type="text" class="inp" id="ward" name="ward" placeholder="Enter Ward Number" onblur="validate(6)" value="{{ old('ward') }}" required>
                                            <span class="text-danger">
                                                @error('ward')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
            
                                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3"> Vidhan Sabha :<span class="text-danger"> *</span></label> <input type="text" class="inp" id="vidhan" name="vidhan" placeholder="Enter Vidhan Sabha Name" onblur="validate(6)" value="{{ old('vidhan') }}" required>
                                            <span class="text-danger">
                                                @error('vidhan')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>

                                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Phone number :<span class="text-danger"> *</span></label> <input type="text" class="inp" id="mobile" name="mobile" placeholder="Enter Mobile Number" onblur="validate(4)" value="{{ old('mobile') }}" required> </div>
                                            <span class="text-danger">
                                                @error('mobile')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                       
                        <div id="member">
                            <div class="row justify-content-between text-left addMemeber memberCount" id="member">
                                <div class="form-group col-3 flex-column d-flex"> <label class="form-control-label px-3">Name :<span class="text-danger"> *</span></label> <input type="text" class="inp" id="name" name="name[]" placeholder="Enter Name" onblur="validate(6)" value="" required>
                                    <span class="text-danger">
                                        @error('name')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Relation :</label>
                                    <select class="form-select select" id="relation" name="relation[]" required="true">
                                        <option>Relation</option>
                                        <option value="Father">Father</option>
                                        <option value="Father">Mother</option>
                                        <option value="Spouse">Spouse</option>
                                        <option value="Brother">Brother</option>
                                        <option value="Sister">Sister</option>
                                        <option value="Husband">Husband</option>
                                        <option value="Wife">Wife</option>
                                        <option value="Son">Son</option>
                                        <option value="Daughter">Daughter</option>
                                        <option value="Grand Father">Grand Father</option>
                                        <option value="Grand Mother">Grand Mother</option>
                                        <option value="Uncle">Uncle</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('relation')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                                <!-- <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Relation :<span class="text-danger"> *</span></label> <input type="text" class="inp" id="relation" name="relation[]" placeholder="Enter Relation" onblur="validate(6)">
                                    <span class="text-danger">
                                        @error('relation')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div> -->

                                <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Age/DOB :<span class="text-danger"> *</span></label> <input type="date" class="inp" id="age" name="age[]" placeholder="Enter Age" onblur="validate(6)" value="" required>
                                    <span class="text-danger">
                                        @error('age')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Citizenship :<span class="text-danger"> *</span></label>
                                    <select class="form-select select" id="citizenship" name="citizenship[]" required="true">
                                        <option>Citizenship</option>
                                        @foreach ($country as $data)
                                        <option value="{{ $data->name }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">
                                        @error('citizenship')
                                        {{$message}}
                                        @enderror
                                    </span>

                                </div>

                                <!-- <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Voter- y/n :</label>
                                <input type="text" class="inp" id="voter" name="voter[]" placeholder="Enter Yes/No" onblur="validate(6)">
                                    <span class="text-danger">
                                        @error('voter')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div> -->

                                <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Voter- y/n :</label>
                                    <select class="form-select select" id="voter" name="voter[]" required="true">
                                        <option>Voter</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('voter')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="col-xl-1 col-lg-1 col-md-1 col-1">
                                    <div class="form-group"> <button type="button" id="addMemeberBtn" onclick='addMemeber(this)' class="btn-block btn-success mt-4"><i class="fa fa-plus"></i></button> </div>
                                </div>
                            </div>
                        </div>


                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-12 flex-column d-flex"> <label class="form-control-label px-3">Any Other Information :</label> <input type="text" id="other" class="inp" name="other" placeholder="Any Other Information" onblur="validate(3)" value="{{ old('other') }}">
                                <span class="text-danger">
                                    @error('other')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                        </div>

                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-3 flex-column d-flex"> <label class="form-control-label px-3">Date :</label> <input type="text" id="date" class="inp" name="date" placeholder="" value="<?php echo date('d-m-Y'); ?>" onblur="validate(3)" value="{{ old('date') }}" disabled>
                                <span class="text-danger">
                                    @error('date')
                                    {{$message}}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group col-sm-6 mt-4"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                        </div>
                        <!-- <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-primary">Submit</button> </div>
                        </div> -->


                    </form>
                </div>
            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <script>
        function validate(val) {
            v1 = document.getElementById("fname");
            v2 = document.getElementById("lname");
            v3 = document.getElementById("email");
            v4 = document.getElementById("mob");
            v5 = document.getElementById("job");
            v6 = document.getElementById("ans");

            flag1 = true;
            flag2 = true;
            flag3 = true;
            flag4 = true;
            flag5 = true;
            flag6 = true;

            if (val >= 1 || val == 0) {
                if (v1.value == "") {
                    v1.style.borderColor = "red";
                    flag1 = false;
                } else {
                    v1.style.borderColor = "green";
                    flag1 = true;
                }
            }

            if (val >= 2 || val == 0) {
                if (v2.value == "") {
                    v2.style.borderColor = "red";
                    flag2 = false;
                } else {
                    v2.style.borderColor = "green";
                    flag2 = true;
                }
            }
            if (val >= 3 || val == 0) {
                if (v3.value == "") {
                    v3.style.borderColor = "red";
                    flag3 = false;
                } else {
                    v3.style.borderColor = "green";
                    flag3 = true;
                }
            }
            if (val >= 4 || val == 0) {
                if (v4.value == "") {
                    v4.style.borderColor = "red";
                    flag4 = false;
                } else {
                    v4.style.borderColor = "green";
                    flag4 = true;
                }
            }
            if (val >= 5 || val == 0) {
                if (v5.value == "") {
                    v5.style.borderColor = "red";
                    flag5 = false;
                } else {
                    v5.style.borderColor = "green";
                    flag5 = true;
                }
            }
            if (val >= 6 || val == 0) {
                if (v6.value == "") {
                    v6.style.borderColor = "red";
                    flag6 = false;
                } else {
                    v6.style.borderColor = "green";
                    flag6 = true;
                }
            }

            flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

            return flag;
        }
    </script>

    <script>
        let i = 1;
        let j = 1;

        function addMemeber() {
            let html = `<div class="row justify-content-between text-left addMemeber${i++} memberCount"> <div class="form-group col-3 flex-column d-flex"> <label class="form-control-label px-3">Name :<span class="text-danger"> *</span></label> <input type="text" class="inp" id="name" name="name[]" placeholder="Enter Name" onblur="validate(6)" value=""> </div>

                        <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Relation :</label>
                                                <select class="form-select select" id="relation" name="relation[]" required>
                                                    <option>Relation</option>
                                                    <option value="Father">Father</option>
                                                    <option value="Father">Mother</option>
                                                    <option value="Spouse">Spouse</option>
                                                    <option value="Brother">Brother</option>
                                                    <option value="Sister">Sister</option>
                                                    <option value="Husband">Husband</option>
                                                    <option value="Wife">Wife</option>
                                                    <option value="Son">Son</option>
                                                    <option value="Daughter">Daughter</option>
                                                    <option value="Grand Father">Grand Father</option>
                                                    <option value="Grand Mother">Grand Mother</option>
                                                    <option value="Uncle">Uncle</option>
                                                </select>
                                                <span class="text-danger">
                                                    @error('relation')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>

                                            <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Age/DOB :<span class="text-danger"> *</span></label> <input type="date" class="inp" id="age" name="age[]" placeholder="Enter Age" onblur="validate(6)" value="" required>
                                    <span class="text-danger">
                                        @error('age')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                            <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Citizenship :<span class="text-danger"> *</span></label>
                                    <select class="form-select select" id="citizenship" name="citizenship[]" required>
                                      <option>Citizenship</option>
                                      @foreach ($country as $data)
                                      <option value="{{ $data->name }}">{{ $data->name }}</option>
                                      @endforeach
                                    </select>
                                    <span class="text-danger">
                                        @error('citizenship')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                            <div class="form-group col-2 flex-column d-flex"> <label class="form-control-label px-3">Voter- y/n :</label>
                                    <select class="form-select select" id="voter" name="voter[]" required>
                                        <option>Voter</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('voter')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                            <div class="col-xl-1 col-lg-1 col-md-1 col-1">
                                <div class="form-group btn-group"> <button type="button" onclick='addMemeber()' class="btn-block btn-success mt-4"><i class="fa fa-plus"></i></button> <button type="button" class="btn-block btn-danger mt-4 remove" data-class="addMemeber${j++}">X</button> </div></div>`;

            $('#member').append(html);
        }
        $(document).on('click', '.remove', function() {
            const className = $(this).data('class');
            $(`.${className}`).remove();
        })
    </script>
</body>

</html>