@extends('layouts.master')

@section('title', 'Tambah Data Pasien')

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title my-auto"> {{ $pageTitle['titleHalaman'] }} </h1>
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">{{ $pageTitle['subTitle'] }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle['activePage'] }}</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <form action="{{ route('pasien.store') }}" method="post">

        <div class="card card-custom">
            <div class="card-header">
                <h4>ASSESMENT</h4>
            </div>
            <div class="card-body">
                @csrf
                <div class="form-group mb-2">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Input Here">
                </div>
                <div class="form-group mb-2">
                    <label for="umur">Age</label>
                    <input type="text" name="umur" id="umur" class="form-control" placeholder="Input Here">
                </div>

                <div class="form-group mb-2">
                    <label for="jenis_kelamin">Gender</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="Man">Man</option>
                        <option value="Woman">Woman</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="pekerjaan"> Work</label>
                    <select name="pekerjaan" id="pekerjaan" class="form-control">
                        <option value="Civil servants">Civil servants</option>
                        <option value="Noncivil servants">Noncivil servants</option>
                        <option value="Merchant">Merchant</option>
                        <option value="Private">Private</option>
                        <option value="housewife">housewife</option>
                        <option value="Etc">Etc</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="alamat">Address</label>
                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Pasien"></textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="status"> Status </label>
                    <select name="status" id="status" class="form-control">
                        <option value="Merry"> Merry </option>
                        <option value="Not Merry"> Not Merry </option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="pendidikan"> Education </label>
                    <select name="pendidikan" id="pendidikan" class="form-control">
                        <option value="Primary School">Primary School</option>
                        <option value="Junior High School">Junior High School</option>
                        <option value="Senior High School">Senior High School</option>
                        <option value="Diploma">Diploma</option>
                        <option value="Bachelor">Bachelor</option>
                        <option value="Master">Master</option>
                        <option value="Doctor">Doctor</option>
                        <option value="Professor">Professor</option>
                    </select>
                </div>
                <hr>

                <hr>
                <div class="form-group mb-2">
                    <label for="keluhan" class="form-control">Complaint</label>
                    <div id="keluhan" class="d-flex">
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Headache"
                                id="keluhan1">
                            <label class="form-check-label" for="keluhan1">
                                Headache
                            </label>
                        </div>
                        <div class="form-check  py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Dizzy" id="keluhan2">
                            <label class="form-check-label" for="keluhan2">
                                Dizzy
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Stiff Neck"
                                id="keluhan3">
                            <label class="form-check-label" for="keluhan3">
                                Stiff Neck
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Blurred Vision"
                                id="keluhan4">
                            <label class="form-check-label" for="keluhan4">
                                Blurred Vision
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Easy Fatigue"
                                id="keluhan5">
                            <label class="form-check-label" for="keluhan5">
                                Easy Fatigue
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Restless"
                                id="keluhan6">
                            <label class="form-check-label" for="keluhan6">
                                Restless
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Palpitations"
                                id="keluhan7">
                            <label class="form-check-label" for="keluhan7">
                                Palpitations
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keluhan[]" value="Impotence"
                                id="keluhan8">
                            <label class="form-check-label" for="keluhan8">
                                Impotence
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="riwayat_penyakit" class="form-control">Current Medical History</label>
                    <div id="riwayat_penyakit" class="d-flex">
                        <div class="form-check  py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]" value="Headaches"
                                id="riwayat1">
                            <label class="form-check-label" for="riwayat1">
                                Headaches
                            </label>
                        </div>
                        <div class="form-check  py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]" value="Dizzy"
                                id="riwayat2">
                            <label class="form-check-label" for="riwayat2">
                                Dizzy
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]"
                                value="Dizziness immediately" id="riwayat3">
                            <label class="form-check-label" for="riwayat3">
                                Dizziness immediately after waking up and gradually disappears after a few hours
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]"
                                value="Blurred Vision" id="riwayat4">
                            <label class="form-check-label" for="riwayat4">
                                Blurred Vision
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]" value="Nauseous"
                                id="riwayat5">
                            <label class="form-check-label" for="riwayat5">
                                Nauseous
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]"
                                value="Irregular Heartbeat" id="riwayat6">
                            <label class="form-check-label" for="riwayat6">
                                Irregular Heartbeat
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]" value="Chest Pain"
                                id="riwayat7">
                            <label class="form-check-label" for="riwayat7">
                                Chest Pain
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]" value="Pulse"
                                id="riwayat8">
                            <label class="form-check-label" for="riwayat8">
                                Pulse
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]"
                                value="Blood Pressure" id="riwayat9">
                            <label class="form-check-label" for="riwayat9">
                                Blood Pressure
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]"
                                value="Body Temperature" id="riwayat10">
                            <label class="form-check-label" for="riwayat10">
                                Body Temperature
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit[]" value="Breathing"
                                id="riwayat11">
                            <label class="form-check-label" for="riwayat11">
                                Breathing
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="riwayat_alergi" class="form-control">Medical History First</label>
                    <div id="riwayat_alergi" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_alergi[]"
                                value="Asses the presence of a history of hypertension" id="riwayat_alergi1">
                            <label class="form-check-label" for="riwayat_alergi1">
                                Asses the presence of a history of hypertension
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_alergi[]"
                                value="Heart Disease" id="riwayat_alergi2">
                            <label class="form-check-label" for="riwayat_alergi2">
                                Heart Disease
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_alergi[]"
                                value="Kidney Disease" id="riwayat_alergi3">
                            <label class="form-check-label" for="riwayat_alergi3">
                                Kidney Disease
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_alergi[]" value="Stroke"
                                id="riwayat_alergi4">
                            <label class="form-check-label" for="riwayat_alergi4">
                                Stroke
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_alergi[]"
                                value="Past History Of Drug Use" id="riwayat_alergi5">
                            <label class="form-check-label" for="riwayat_alergi5">
                                Past History Of Drug Use
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_alergi[]"
                                value="History Of Allergy To Drug" id="riwayat_alergi6">
                            <label class="form-check-label" for="riwayat_alergi6">
                                History Of Allergy To Drug
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="riwayat_penyakit_keluarga" class="form-control">Family Medical History</label>
                    <div id="riwayat_penyakit_keluarga" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit_keluarga[]"
                                value="Family History of Hypertension" id="riwayat_penyakit_keluarga1">
                            <label class="form-check-label" for="riwayat_penyakit_keluarga1">
                                Family History of Hypertension
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit_keluarga[]"
                                value="Family History of Metabolic Disease" id="riwayat_penyakit_keluarga2">
                            <label class="form-check-label" for="riwayat_penyakit_keluarga2">
                                Family History of Metabolic Disease
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit_keluarga[]"
                                value="Family There Are Infectious Disease Such as Tuberculosis, Hiv, Urinary Tract Infectious"
                                id="riwayat_penyakit_keluarga3">
                            <label class="form-check-label" for="riwayat_penyakit_keluarga3">
                                Family There Are Infectious Disease Such as Tuberculosis, Hiv, Urinary Tract Infectious
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit_keluarga[]"
                                value="Family History of Diabetes Mellitus" id="riwayat_penyakit_keluarga4">
                            <label class="form-check-label" for="riwayat_penyakit_keluarga4">
                                Family History of Diabetes Mellitus
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit_keluarga[]"
                                value="Family History of Asthma" id="riwayat_penyakit_keluarga5">
                            <label class="form-check-label" for="riwayat_penyakit_keluarga5">
                                Family History of Asthma
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="riwayat_penyakit_keluarga[]"
                                value="Family History of Other Disease" id="riwayat_penyakit_keluarga6">
                            <label class="form-check-label" for="riwayat_penyakit_keluarga6">
                                Family History of Other Disease
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="aktifitas_sehari_hari">Activity / Rest</label>
                    <div id="aktifitas_sehari_hari" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="aktifitas_sehari_hari[]"
                                value="The downsides of activities" id="aktifitas_sehari_hari1">
                            <label class="form-check-label" for="aktifitas_sehari_hari1">
                                The downsides of activities
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="aktifitas_sehari_hari[]"
                                value="Tired" id="aktifitas_sehari_hari2">
                            <label class="form-check-label" for="aktifitas_sehari_hari2">
                                Tired
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="aktifitas_sehari_hari[]"
                                value="Shortness Of Breath" id="aktifitas_sehari_hari3">
                            <label class="form-check-label" for="aktifitas_sehari_hari3">
                                Shortness Of Breath
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="aktifitas_sehari_hari[]"
                                value="Increased heart frequency" id="aktifitas_sehari_hari4">
                            <label class="form-check-label" for="aktifitas_sehari_hari4">
                                Increased heart frequency
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="aktifitas_sehari_hari[]"
                                value="Changes in heart rhythm" id="aktifitas_sehari_hari5">
                            <label class="form-check-label" for="aktifitas_sehari_hari5">
                                Changes in heart rhythm
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="aktifitas_sehari_hari[]"
                                value="Tachypnea" id="aktifitas_sehari_hari6">
                            <label class="form-check-label" for="aktifitas_sehari_hari6">
                                Tachypnea
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="sirkulasi">Circulation</label>
                    <div id="sirkulasi" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]"
                                value="History of hypertension" id="sirkulasi1">
                            <label class="form-check-label" for="sirkulasi1">
                                History of hypertension
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]" value="Atherosclerosis"
                                id="sirkulasi2">
                            <label class="form-check-label" for="sirkulasi2">
                                Atherosclerosis
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]"
                                value="Coronary heart disease" id="sirkulasi3">
                            <label class="form-check-label" for="sirkulasi3">
                                Coronary heart disease
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]"
                                value="Cerebrovascular diseases" id="sirkulasi4">
                            <label class="form-check-label" for="sirkulasi4">
                                Cerebrovascular diseases
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]"
                                value="Increased blood pressure" id="sirkulasi5">
                            <label class="form-check-label" for="sirkulasi5">
                                Increased blood pressure
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]" value="Pulse tachycardia"
                                id="sirkulasi6">
                            <label class="form-check-label" for="sirkulasi6">
                                Pulse tachycardia
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]" value="Murmur"
                                id="sirkulasi7">
                            <label class="form-check-label" for="sirkulasi7">
                                Murmur
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]"
                                value="Jugular vein distension" id="sirkulasi8">
                            <label class="form-check-label" for="sirkulasi8">
                                Jugular vein distension
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]" value="Pale Skin"
                                id="sirkulasi9">
                            <label class="form-check-label" for="sirkulasi9">
                                Pale Skin
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]" value="Cyanosis"
                                id="sirkulasi10">
                            <label class="form-check-label" for="sirkulasi10">
                                Cyanosis
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]" value="Cold temperature"
                                id="sirkulasi11">
                            <label class="form-check-label" for="sirkulasi11">
                                Cold temperature
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="sirkulasi[]"
                                value="Slow capillary filling" id="sirkulasi12">
                            <label class="form-check-label" for="sirkulasi12">
                                Slow capillary filling
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="integritas_ego">Ego Integrity</label>
                    <div id="integritas_ego" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="integritas_ego[]" value="Anxiety"
                                id="integritas_ego1">
                            <label class="form-check-label" for="integritas_ego1">
                                Anxiety
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="integritas_ego[]" value="Stress"
                                id="integritas_ego2">
                            <label class="form-check-label" for="integritas_ego2">
                                Stress
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="integritas_ego[]" value="Restless"
                                id="integritas_ego3">
                            <label class="form-check-label" for="integritas_ego3">
                                Restless
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="integritas_ego[]" value="Pop mood"
                                id="integritas_ego4">
                            <label class="form-check-label" for="integritas_ego4">
                                Pop mood
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="integritas_ego[]"
                                value="Narrowing of attention" id="integritas_ego5">
                            <label class="form-check-label" for="integritas_ego5">
                                Narrowing of attention
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="integritas_ego[]"
                                value="Improved speech patterns" id="integritas_ego6">
                            <label class="form-check-label" for="integritas_ego6">
                                Improved speech patterns
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group mb-2">
                    <label for="eliminasi">Elimination</label>
                    <div id="eliminasi" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="eliminasi[]"
                                value="Renal impariment/history of renal impairment" id="eliminasi1">
                            <label class="form-check-label" for="eliminasi1">
                                Renal impairment/history of renal impairment
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="eliminasi[]" value="Urine insecurity"
                                id="eliminasi2">
                            <label class="form-check-label" for="eliminasi2">
                                Urine insecurity
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="eliminasi[]" value="Little urine"
                                id="eliminasi3">
                            <label class="form-check-label" for="eliminasi3">
                                Little urine
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="nutrisi">Food / Liquid</label>
                    <div id="nutrisi" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="nutrisi[]" value="Foods high in salt"
                                id="nutrisi1">
                            <label class="form-check-label" for="nutrisi1">
                                Foods high in salt
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="nutrisi[]"
                                value="Foods high in fat and cholestrol" id="nutrisi2">
                            <label class="form-check-label" for="nutrisi2">
                                Foods high in fat and cholesterol
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="nutrisi[]"
                                value="Enjoy ready to ead food" id="nutrisi3">
                            <label class="form-check-label" for="nutrisi3">
                                Enjoy ready to eat food
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="nutrisi[]"
                                value="Enjoying food with food" id="nutrisi4">
                            <label class="form-check-label" for="nutrisi4">
                                Enjoying food with food
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="nutrisi[]" value="Enjoying fried food"
                                id="nutrisi5">
                            <label class="form-check-label" for="nutrisi5">
                                Enjoying fried food
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="nutrisi[]" value="Nauseous"
                                id="nutrisi6">
                            <label class="form-check-label" for="nutrisi6">
                                Nauseous
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="nutrisi[]" value="Vomit"
                                id="nutrisi7">
                            <label class="form-check-label" for="nutrisi7">
                                Vomit
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="nutrisi[]" value="Weight Loss"
                                id="nutrisi8">
                            <label class="form-check-label" for="nutrisi8">
                                Weight Loss
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="nutrisi[]" value="Weight gain"
                                id="nutrisi9">
                            <label class="form-check-label" for="nutrisi9">
                                Weight gain
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="rasa_sakit">Pain / Discomfort</label>
                    <div id="rasa_sakit" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="rasa_sakit[]" value="Headache"
                                id="rasa_sakit1">
                            <label class="form-check-label" for="rasa_sakit1">
                                Headache
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="rasa_sakit[]" value="Chest pain"
                                id="rasa_sakit2">
                            <label class="form-check-label" for="rasa_sakit2">
                                Chest pain
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="rasa_sakit[]" value="Afternoon throat"
                                id="rasa_sakit3">
                            <label class="form-check-label" for="rasa_sakit3">
                                Afternoon throat
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label for="pernapasan">Breathing</label>
                    <div id="pernapasan" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="pernapasan[]"
                                value="Dyspnoea if you are active" id="pernapasan1">
                            <label class="form-check-label" for="pernapasan1">
                                Dyspnoea if you are active
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="pernapasan[]" value="Tachypnoea"
                                id="pernapasan2">
                            <label class="form-check-label" for="pernapasan2">
                                Tachypnoea
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="pernapasan[]" value="Orthopnoea"
                                id="pernapasan3">
                            <label class="form-check-label" for="pernapasan3">
                                Orthopnoea
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="pernapasan[]" value="Cough and sputum"
                                id="pernapasan4">
                            <label class="form-check-label" for="pernapasan4">
                                Cough and sputum
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="pernapasan[]"
                                value="The sound of breathing (wheezing)" id="pernapasan5">
                            <label class="form-check-label" for="pernapasan5">
                                The sound of breathing (wheezing)
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="pernapasan[]" value="Cyanosis"
                                id="pernapasan6">
                            <label class="form-check-label" for="pernapasan6">
                                Cyanosis
                            </label>
                        </div>
                    </div>
                </div>


                <div class="form-group mb-2">
                    <label for="keamanan">Security</label>
                    <div id="keamanan" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keamanan[]"
                                value="Cordination/Walking disorders" id="keamanan1">
                            <label class="form-check-label" for="keamanan1">
                                Coordination/Walking disorders
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="keamanan[]"
                                value="Postural hypotension" id="keamanan2">
                            <label class="form-check-label" for="keamanan2">
                                Postural hypotension
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- NURSING --}}
        <div class="card custom-card">
            <div class="card-header">
                <h4>INURSING DIAGNOSIS</h4>
            </div>
            <div class="card-body">
                <div class="form-group mb-2">
                    <label>1. Physiological Injury Agents</label>
                    <div id="physiological_injury" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury[]"
                                value="Inflammatory" id="physiological_injury1">
                            <label class="form-check-label" for="physiological_injury1">
                                Inflammatory
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury[]"
                                value="Ischemia" id="physiological_injury2">
                            <label class="form-check-label" for="physiological_injury2">
                                Ischemia
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury[]"
                                value="Neoplasm" id="physiological_injury3">
                            <label class="form-check-label" for="physiological_injury3">
                                Neoplasm
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h6>Limitations Characteristic</h6>
        <hr>
        <div class="card card-custom">
            <div class="card-body">
                <hr>
                <p> Major Criteria </p>
                <hr>
                <div class="form-group mb-2">
                    <label>A. Subjective</label>
                    <div id="physiological_injury_minor_a" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_a[]"
                                value="Complaining of pain" id="physiological_injury_minor_a1">
                            <label class="form-check-label" for="physiological_injury_minor_a1">
                                Complaining of pain
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label>B. Objective</label>
                    <div id="physiological_injury_minor_b" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b[]"
                                value="Grimacing" id="physiological_injury_minor_b1">
                            <label class="form-check-label" for="physiological_injury_minor_b1">
                                Grimacing
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b[]"
                                value="Be protective (ex: alert, pain avoidance position)"
                                id="physiological_injury_minor_b2">
                            <label class="form-check-label" for="physiological_injury_minor_b2">
                                Be protective (ex: alert, pain avoidance position)
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b[]"
                                value="Restless" id="physiological_injury_minor_b3">
                            <label class="form-check-label" for="physiological_injury_minor_b3">
                                Restless
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b[]"
                                value="Increased pulse frequency" id="physiological_injury_minor_b4">
                            <label class="form-check-label" for="physiological_injury_minor_b4">
                                Increased pulse frequency
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b[]"
                                value="Difficulty sleeping" id="physiological_injury_minor_b5">
                            <label class="form-check-label" for="physiological_injury_minor_b5">
                                Difficulty sleeping
                            </label>
                        </div>
                    </div>
                </div>
                <hr>
                <p> Minor Criteria </p>
                <hr>
                <div class="form-group mb-2">
                    <label>A. Subjective</label>
                    <div id="physiological_injury_minor_a_2" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_a_2[]"
                                value="There aren't any" id="physiological_injury_minor_a_2_1">
                            <label class="form-check-label" for="physiological_injury_minor_a_2_1">
                                There aren't any
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label>B. Objective</label>
                    <div id="physiological_injury_minor_b_2" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b_2[]"
                                value="Increased blood pressure" id="physiological_injury_minor_b_2_1">
                            <label class="form-check-label" for="physiological_injury_minor_b_2_1">
                                Increased blood pressure
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b_2[]"
                                value="Breathing pattern changes" id="physiological_injury_minor_b_2_2">
                            <label class="form-check-label" for="physiological_injury_minor_b_2_2">
                                Breathing pattern changes
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b_2[]"
                                value="Appetite changes" id="physiological_injury_minor_b_2_3">
                            <label class="form-check-label" for="physiological_injury_minor_b_2_3">
                                Appetite changes
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b_2[]"
                                value="Disrupted thought process" id="physiological_injury_minor_b_2_4">
                            <label class="form-check-label" for="physiological_injury_minor_b_2_4">
                                Disrupted thought process
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b_2[]"
                                value="Withdraw" id="physiological_injury_minor_b_2_5">
                            <label class="form-check-label" for="physiological_injury_minor_b_2_5">
                                Withdraw
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b_2[]"
                                value="Focus on yourself" id="physiological_injury_minor_b_2_6">
                            <label class="form-check-label" for="physiological_injury_minor_b_2_6">
                                Focus on yourself
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="physiological_injury_minor_b_2[]"
                                value="Diaphoresis" id="physiological_injury_minor_b_2_7">
                            <label class="form-check-label" for="physiological_injury_minor_b_2_7">
                                Diaphoresis
                            </label>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <hr>
        <h6>Related Clinical Donditions</h6>
        <hr>
        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label>Related Clinical Conditions</label>
                    <div id="related_clinical_conditions" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="related_clinical_conditions[]" value="Surgical conditions" id="related_clinical_conditions_1">
                            <label class="form-check-label" for="related_clinical_conditions_1">
                                Surgical conditions
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="related_clinical_conditions[]" value="Traumatic injury" id="related_clinical_conditions_2">
                            <label class="form-check-label" for="related_clinical_conditions_2">
                                Traumatic injury
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="related_clinical_conditions[]" value="Infection" id="related_clinical_conditions_3">
                            <label class="form-check-label" for="related_clinical_conditions_3">
                                Infection
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="related_clinical_conditions[]" value="Acute coronary syndrome" id="related_clinical_conditions_4">
                            <label class="form-check-label" for="related_clinical_conditions_4">
                                Acute coronary syndrome
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="related_clinical_conditions[]" value="Glaucoma" id="related_clinical_conditions_5">
                            <label class="form-check-label" for="related_clinical_conditions_5">
                                Glaucoma
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card card-custom  bg-primary">
            <div class="card-body">
                <div class="form-group mb-2">
                    <a for="ineffective">2.Ineffective peripheral perfusion </a>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <a for="">Subjective</a>
                    <select name="ineffective_subjective" id="ineffective_subjective" class="form-control">
                        <option value="not available">not available</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <a for="ineffective_objective">Objective</a>
                    <select name="ineffective_objective" id="ineffective_objective" class="form-control">
                        <option value="Capillary refill >3 seconds">Capillary refill >3 seconds</option>
                        <option value="Peripheral pulse decreased or not palpable">Peripheral pulse decreased or not
                            palpable</option>
                        <option value="Pale skin colour">Pale skin colour</option>
                        <option value="Decreased skin turgor">Decreased skin turgor</option>
                    </select>
                </div>
                <p class="mb-2"> <b>Minor Criteria </b></p>

                <div class="form-group mb-2">
                    <label for="ineffective_objective_a">1. Subjective</label>
                    <select name="ineffective_objective_a" id="ineffective_objective_a" class="form-control">
                        <option value="Edema">Paraesthesia</option>
                        <option value="Extremity pain (intermittent claudication)">Extremity pain (intermittent
                            claudication)</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="ineffective_objective_b">2. Subjective</label>
                    <select name="ineffective_objective_b" id="ineffective_objective_b" class="form-control">
                        <option value="Edema">Edema</option>
                        <option value="Slow wound healing">Slow wound healing</option>
                    </select>
                </div>

                <div class="form-group mb-2">
                    <label for="associated_clinical_conditions_2">2. Subjective</label>
                    <select name="associated_clinical_conditions_2" id="associated_clinical_conditions_2"
                        class="form-control">
                        <option value="Thrombophlebitis">Thrombophlebitis</option>
                        <option value="Diabetes mellitus">Diabetes mellitus</option>
                        <option value="Anemia">Anemia</option>
                        <option value="Congestive heart failure">Congestive heart failure</option>
                        <option value="Arterial thrombosis">Arterial thrombosis</option>
                        <option value="Varicose veins">Varicose veins</option>
                        <option value="Deep vein thrombosis">Deep vein thrombosis</option>
                        <option value="Compartment syndrome">Compartment syndrome</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-custom  bg-primary">
            <div class="card-body">
                <div class="form-group mb-2">
                    <a for="Hypervolemia">3. Hypervolemia</a>
                </div>
            </div>
        </div>
        <hr>
        <h6>Limitations Characteristic</h6>
        <hr>

        <div class="card card-custom">
            <div class="card-body">
                <p> Major Criteria </p>
                <div class="form-group mb-2">
                    <label for="Hypervolemia_subjective">1. Subjective </label>
                    <select name="Hypervolemia_subjective" id="Hypervolemia_subjective" class="form-control">
                        <option value="Orthopnoea">Orthopnoea</option>
                        <option value="Dyspnoea">Dyspnoea</option>
                        <option value="Paroxysmal nocturnal">Paroxysmal nocturnal</option>
                        <option value="Dyspnoea (PND)">Dyspnoea (PND)</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="Hypervolemia_objective">B. Objective</label>
                    <select name="Hypervolemia_objective" id="Hypervolemia_objective" class="form-control">
                        <option value="Grimacing">Grimacing</option>
                        <option value="Weight gain in a short time">Weight gain in a short time</option>
                        <option
                            value="Jugular venous pressure (JVP) and/or Central Venous pressure (CVP) increased Positive hepatojugular reflex">
                            Jugular venous pressure (JVP) and/or Central Venous pressure (CVP) increased Positive
                            hepatojugular reflex</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <p> Minor Criteria </p>
                <div class="form-group mb-2">
                    <label for="Hypervolemia_subjective_1">1. Subjective </label>
                    <select name="Hypervolemia_subjective_1" id="Hypervolemia_subjective_1" class="form-control">
                        <option value="not available">not available</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="Hypervolemia_objective_1">B. Objective</label>
                    <select name="Hypervolemia_objective_1" id="Hypervolemia_objective_1" class="form-control">
                        <option value="Grimacing">Grimacing</option>
                        <option value="Jugular venous distention">Jugular venous distention</option>
                        <option value="Additional breath sounds">Additional breath sounds</option>
                        <option value="Hepatomegaly">Hepatomegaly</option>
                        <option value="Hb/Ht levels go down">Hb/Ht levels go down</option>
                        <option value="Oliguria">Oliguria</option>
                        <option value="Intake is more than output">Intake is more than output</option>
                        <option value="Lung congestion">Lung congestion</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="Hypervolemia_limitations">Characteristic limitation</label>
                    <select name="Hypervolemia_limitations" id="Hypervolemia_limitations" class="form-control">
                        <option value="Associated clinical conditions">Associated clinical conditions</option>
                        <option value="Kidney disease: acute/chronic renal failure, nephrotic syndrome">Kidney disease:
                            acute/chronic renal failure, nephrotic syndrome</option>
                        <option value="Hypoalbuminemia">Hypoalbuminemia</option>
                        <option value="Congestive heart failure">Congestive heart failure</option>
                        <option value="Hormonal disorders">Hormonal disorders</option>
                        <option value="Liver disease (eg cirrhosis, ascites, liver cancer)">Liver disease (eg cirrhosis,
                            ascites, liver cancer)</option>
                        <option value="Peripheral venous disease (eg varicose veins, venous thrombus, phlebitis)">
                            Peripheral venous disease (eg varicose veins, venous thrombus, phlebitis)</option>
                        <option value="Immobility">Peripheral venous disease (eg varicose veins, venous thrombus,
                            phlebitis)</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-custom  bg-primary">
            <div class="card-body">
                <div class="form-group mb-2"></div>
                <a for="Anxiety">4. Anxiety</a>
                <p>Cause: lack of exposure to information</p>
            </div>
        </div>
        </div>

        <hr>
        <h6>Characteristic Limitations:</h6>
        <hr>

        <div class="card card-custom">
            <div class="card-body">
                <p> Major Criteria </p>
                <div class="form-group mb-2">
                    <label for="Anxiety_subjective">1. Subjective </label>
                    <select name="Anxiety_subjective" id="Anxiety_subjective" class="form-control">
                        <option value="Feeling confused">Feeling confused</option>
                        <option value="Feeling worried about the consequences of the conditions faced">Feeling worried
                            about the consequences of the conditions faced</option>
                        <option value="It's hard to concentrate">It's hard to concentrate</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="Anxiety_objective">B. Objective</label>
                    <select name="Anxiety_objective" id="Anxiety_objective" class="form-control">
                        <option value="Looking restless">Looking restless</option>
                        <option value="Looks tense">Looks tense</option>
                        <option value="Hard to sleep">Hard to sleep</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card card-custom">
            <div class="card-body">
                <p> Minor Criteria </p>
                <div class="form-group mb-2">
                    <label for="Anxiety_subjective_1">1. Subjective </label>
                    <select name="Anxiety_subjective_1" id="Anxiety_subjective_1" class="form-control">
                        <option value="Complaining dizzy">Complaining dizzy</option>
                        <option value="Anorexia">Anorexia</option>
                        <option value="Palpitations">Palpitations</option>
                        <option value="Feeling helpless">Feeling helpless</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="Anxiety_objective_1">B. Objective</label>
                    <select name="Anxiety_objective_1" id="Anxiety_objective_1" class="form-control">
                        <option value="Increased respiratory rate">Increased respiratory rate</option>
                        <option value="Increased pulse rate">Increased pulse rate</option>
                        <option value="Increased blood pressure">Increased blood pressure</option>
                        <option value="Diaphoresis">Diaphoresis</option>
                        <option value="Tremor">Tremor</option>
                        <option value="Face looks pale">Face looks pale</option>
                        <option value="Vibrating voice">Vibrating voice</option>
                        <option value="Bad eye contact">Bad eye contact</option>
                        <option value="Frequent urination">Frequent urination</option>
                        <option value="Oriented to the past">Oriented to the past</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="Anxiety_related_condition">Related Clinical Conditions</label>
                    <select name="Anxiety_related_condition" id="Anxiety_related_condition" class="form-control">
                        <option value="Progressive chronic disease (eg cancer, autoimmune disease)">Progressive chronic
                            disease (eg cancer, autoimmune disease)</option>
                        <option value="Acute illness">Acute illness</option>
                        <option value="Hospitalization">Hospitalization</option>
                        <option value="Operation plan">Operation plan</option>
                        <option value="The condition of the disease diagnosis is not clear">The condition of the disease
                            diagnosis is not clear</option>
                        <option value="Neurological disease">Neurological disease</option>
                        <option value="Growth stage">Growth stage</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-custom bg-primary">
            <div class="card-body">
                <div class="form-group mb-2"></div>
                <a for="Risk">5. Risk for decreased cardiac output related to changes in afterload</a>
                <p>Goal: After nursing actions are expected to increase cardiac output</p>
            </div>
        </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="risk_outcome_criteria">Outcome criteria: cardiac output </label>
                    <select name="risk_outcome_criteria" id="risk_outcome_criteria" class="form-control">
                        <option value="Vital signs within normal range">Vital signs within normal range</option>
                        <option value="Strong pulse">Strong pulse</option>
                        <option value="The patient does not complain of fatigue">The patient does not complain of fatigue
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="risk_outcome_criteria">Action plan: </label>
                    <select name="risk_outcome_criteria" id="risk_outcome_criteria" class="form-control">
                        <option value="Dyspnoea">Dyspnoea</option>
                        <option value="Fatigue">Fatigue</option>
                        <option value="Edema">Edema</option>
                        <option value="Orthopnoea">Orthopnoea</option>
                        <option value="Paroxysmal">Paroxysmal</option>
                        <option value="CVP increase">CVP increase</option>
                    </select>
                </div>
            </div>
        </div>

    </form>


@endsection
