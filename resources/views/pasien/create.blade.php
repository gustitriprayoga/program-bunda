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
                    <label for="sirkulasi" class="form-control">Circulation</label>
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
                    <label for="integritas_ego" class="form-control">Ego Integrity</label>
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
                    <label for="eliminasi" class="form-control">Elimination</label>
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
                    <label for="nutrisi" class="form-control">Food / Liquid</label>
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
                    <label for="rasa_sakit"  class="form-control">Pain / Discomfort</label>
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
                    <label for="pernapasan"  class="form-control">Breathing</label>
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
                    <label for="keamanan"  class="form-control">Security</label>
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
                    <label  class="form-control">1. Physiological Injury Agents</label>
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
                    <label  class="form-control">A. Subjective</label>
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
                    <label  class="form-control">B. Objective</label>
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
                    <label  class="form-control">A. Subjective</label>
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
                    <label  class="form-control">B. Objective</label>
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
                    <label  class="form-control">Related Clinical Conditions</label>
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
                <div class="form-group mb-2"  class="form-control">
                    <a for="ineffective">2.Ineffective peripheral perfusion </a>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label  class="form-control">Subjective</label>
                            <div id="ineffective_subjective" class="d-flex flex-wrap">
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="ineffective_subjective[]" value="not available" id="ineffective_subjective_1">
                                    <label class="form-check-label" for="ineffective_subjective_1">
                                        not available
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label>Objective</label>
                            <div id="ineffective_objective" class="d-flex flex-wrap">
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="ineffective_objective[]" value="Capillary refill >3 seconds" id="ineffective_objective_1">
                                    <label class="form-check-label" for="ineffective_objective_1">
                                        Capillary refill >3 seconds
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="ineffective_objective[]" value="Peripheral pulse decreased or not palpable" id="ineffective_objective_2">
                                    <label class="form-check-label" for="ineffective_objective_2">
                                        Peripheral pulse decreased or not palpable
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="ineffective_objective[]" value="Pale skin colour" id="ineffective_objective_3">
                                    <label class="form-check-label" for="ineffective_objective_3">
                                        Pale skin colour
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="ineffective_objective[]" value="Decreased skin turgor" id="ineffective_objective_4">
                                    <label class="form-check-label" for="ineffective_objective_4">
                                        Decreased skin turgor
                                    </label>
                                </div>
                            </div>
                        </div>

                        <p class="mb-2"><b>Minor Criteria</b></p>

                        <div class="form-group mb-2">
                            <label for="ineffective_objective_a"  class="form-control">1. Subjective</label>
                            <div id="ineffective_objective_a" class="d-flex flex-wrap">
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="ineffective_objective_a[]" value="Paraesthesia" id="ineffective_objective_a_1">
                                    <label class="form-check-label" for="ineffective_objective_a_1">
                                        Paraesthesia
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="ineffective_objective_a[]" value="Extremity pain (intermittent claudication)" id="ineffective_objective_a_2">
                                    <label class="form-check-label" for="ineffective_objective_a_2">
                                        Extremity pain (intermittent claudication)
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="ineffective_objective_b"  class="form-control">2. Subjective</label>
                            <div id="ineffective_objective_b" class="d-flex flex-wrap">
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="ineffective_objective_b[]" value="Edema" id="ineffective_objective_b_1">
                                    <label class="form-check-label" for="ineffective_objective_b_1">
                                        Edema
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="ineffective_objective_b[]" value="Slow wound healing" id="ineffective_objective_b_2">
                                    <label class="form-check-label" for="ineffective_objective_b_2">
                                        Slow wound healing
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="associated_clinical_conditions_2"  class="form-control">2. Subjective</label>
                            <div id="associated_clinical_conditions_2" class="d-flex flex-wrap">
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="associated_clinical_conditions_2[]" value="Thrombophlebitis" id="associated_clinical_conditions_2_1">
                                    <label class="form-check-label" for="associated_clinical_conditions_2_1">
                                        Thrombophlebitis
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="associated_clinical_conditions_2[]" value="Diabetes mellitus" id="associated_clinical_conditions_2_2">
                                    <label class="form-check-label" for="associated_clinical_conditions_2_2">
                                        Diabetes mellitus
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="associated_clinical_conditions_2[]" value="Anemia" id="associated_clinical_conditions_2_3">
                                    <label class="form-check-label" for="associated_clinical_conditions_2_3">
                                        Anemia
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="associated_clinical_conditions_2[]" value="Congestive heart failure" id="associated_clinical_conditions_2_4">
                                    <label class="form-check-label" for="associated_clinical_conditions_2_4">
                                        Congestive heart failure
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="associated_clinical_conditions_2[]" value="Arterial thrombosis" id="associated_clinical_conditions_2_5">
                                    <label class="form-check-label" for="associated_clinical_conditions_2_5">
                                        Arterial thrombosis
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="associated_clinical_conditions_2[]" value="Varicose veins" id="associated_clinical_conditions_2_6">
                                    <label class="form-check-label" for="associated_clinical_conditions_2_6">
                                        Varicose veins
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="associated_clinical_conditions_2[]" value="Deep vein thrombosis" id="associated_clinical_conditions_2_7">
                                    <label class="form-check-label" for="associated_clinical_conditions_2_7">
                                        Deep vein thrombosis
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="associated_clinical_conditions_2[]" value="Compartment syndrome" id="associated_clinical_conditions_2_8">
                                    <label class="form-check-label" for="associated_clinical_conditions_2_8">
                                        Compartment syndrome
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
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
            <div class="card card-custom">
                <div class="card-body">
                    <p>Major Criteria</p>

                    <div class="form-group mb-2">
                        <label  class="form-control">1. Subjective</label>
                        <div id="Hypervolemia_subjective" class="d-flex flex-wrap">
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="Hypervolemia_subjective[]" value="Orthopnoea" id="Hypervolemia_subjective_1">
                                <label class="form-check-label" for="Hypervolemia_subjective_1">
                                    Orthopnoea
                                </label>
                            </div>
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="Hypervolemia_subjective[]" value="Dyspnoea" id="Hypervolemia_subjective_2">
                                <label class="form-check-label" for="Hypervolemia_subjective_2">
                                    Dyspnoea
                                </label>
                            </div>
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="Hypervolemia_subjective[]" value="Paroxysmal nocturnal" id="Hypervolemia_subjective_3">
                                <label class="form-check-label" for="Hypervolemia_subjective_3">
                                    Paroxysmal nocturnal
                                </label>
                            </div>
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="Hypervolemia_subjective[]" value="Dyspnoea (PND)" id="Hypervolemia_subjective_4">
                                <label class="form-check-label" for="Hypervolemia_subjective_4">
                                    Dyspnoea (PND)
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <label  class="form-control">B. Objective</label>
                        <div id="Hypervolemia_objective" class="d-flex flex-wrap">
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="Hypervolemia_objective[]" value="Grimacing" id="Hypervolemia_objective_1">
                                <label class="form-check-label" for="Hypervolemia_objective_1">
                                    Grimacing
                                </label>
                            </div>
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="Hypervolemia_objective[]" value="Weight gain in a short time" id="Hypervolemia_objective_2">
                                <label class="form-check-label" for="Hypervolemia_objective_2">
                                    Weight gain in a short time
                                </label>
                            </div>
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="Hypervolemia_objective[]" value="Jugular venous pressure (JVP) and/or Central Venous pressure (CVP) increased Positive hepatojugular reflex" id="Hypervolemia_objective_3">
                                <label class="form-check-label" for="Hypervolemia_objective_3">
                                    Jugular venous pressure (JVP) and/or Central Venous pressure (CVP) increased Positive hepatojugular reflex
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="card card-custom">
            <div class="card-body">
                <P> Minor Criteria </P>
                <div class="form-group mb-2">
                    <label  class="form-control">1. Subjective</label>
                    <div id="Hypervolemia_subjective_1" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_subjective_1[]" value="not available" id="Hypervolemia_subjective_1_1">
                            <label class="form-check-label" for="Hypervolemia_subjective_1_1">
                                not available
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-2">
                    <label  class="form-control">B. Objective</label>
                    <div id="Hypervolemia_objective_1" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_objective_1[]" value="Grimacing" id="Hypervolemia_objective_1_1">
                            <label class="form-check-label" for="Hypervolemia_objective_1_1">
                                Grimacing
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_objective_1[]" value="Jugular venous distention" id="Hypervolemia_objective_1_2">
                            <label class="form-check-label" for="Hypervolemia_objective_1_2">
                                Jugular venous distention
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_objective_1[]" value="Additional breath sounds" id="Hypervolemia_objective_1_3">
                            <label class="form-check-label" for="Hypervolemia_objective_1_3">
                                Additional breath sounds
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_objective_1[]" value="Hepatomegaly" id="Hypervolemia_objective_1_4">
                            <label class="form-check-label" for="Hypervolemia_objective_1_4">
                                Hepatomegaly
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_objective_1[]" value="Hb/Ht levels go down" id="Hypervolemia_objective_1_5">
                            <label class="form-check-label" for="Hypervolemia_objective_1_5">
                                Hb/Ht levels go down
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_objective_1[]" value="Oliguria" id="Hypervolemia_objective_1_6">
                            <label class="form-check-label" for="Hypervolemia_objective_1_6">
                                Oliguria
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_objective_1[]" value="Intake is more than output" id="Hypervolemia_objective_1_7">
                            <label class="form-check-label" for="Hypervolemia_objective_1_7">
                                Intake is more than output
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_objective_1[]" value="Lung congestion" id="Hypervolemia_objective_1_8">
                            <label class="form-check-label" for="Hypervolemia_objective_1_8">
                                Lung congestion
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label  class="form-control">Characteristic limitation</label>
                    <div id="Hypervolemia_limitations" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_limitations[]" value="Associated clinical conditions" id="Hypervolemia_limitations_1">
                            <label class="form-check-label" for="Hypervolemia_limitations_1">
                                Associated clinical conditions
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_limitations[]" value="Kidney disease: acute/chronic renal failure, nephrotic syndrome" id="Hypervolemia_limitations_2">
                            <label class="form-check-label" for="Hypervolemia_limitations_2">
                                Kidney disease: acute/chronic renal failure, nephrotic syndrome
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_limitations[]" value="Hypoalbuminemia" id="Hypervolemia_limitations_3">
                            <label class="form-check-label" for="Hypervolemia_limitations_3">
                                Hypoalbuminemia
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_limitations[]" value="Congestive heart failure" id="Hypervolemia_limitations_4">
                            <label class="form-check-label" for="Hypervolemia_limitations_4">
                                Congestive heart failure
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_limitations[]" value="Hormonal disorders" id="Hypervolemia_limitations_5">
                            <label class="form-check-label" for="Hypervolemia_limitations_5">
                                Hormonal disorders
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_limitations[]" value="Liver disease (eg cirrhosis, ascites, liver cancer)" id="Hypervolemia_limitations_6">
                            <label class="form-check-label" for="Hypervolemia_limitations_6">
                                Liver disease (eg cirrhosis, ascites, liver cancer)
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_limitations[]" value="Peripheral venous disease (eg varicose veins, venous thrombus, phlebitis)" id="Hypervolemia_limitations_7">
                            <label class="form-check-label" for="Hypervolemia_limitations_7">
                                Peripheral venous disease (eg varicose veins, venous thrombus, phlebitis)
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Hypervolemia_limitations[]" value="Immobility" id="Hypervolemia_limitations_8">
                            <label class="form-check-label" for="Hypervolemia_limitations_8">
                                Immobility
                            </label>
                        </div>
                    </div>
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
                    <label  class="form-control">1. Subjective</label>
                    <div id="Anxiety_subjective" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_subjective[]" value="Feeling confused" id="Anxiety_subjective_1">
                            <label class="form-check-label" for="Anxiety_subjective_1">
                                Feeling confused
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_subjective[]" value="Feeling worried about the consequences of the conditions faced" id="Anxiety_subjective_2">
                            <label class="form-check-label" for="Anxiety_subjective_2">
                                Feeling worried about the consequences of the conditions faced
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_subjective[]" value="It's hard to concentrate" id="Anxiety_subjective_3">
                            <label class="form-check-label" for="Anxiety_subjective_3">
                                It's hard to concentrate
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label  class="form-control">B. Objective</label>
                    <div id="Anxiety_objective" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_objective[]" value="Looking restless" id="Anxiety_objective_1">
                            <label class="form-check-label" for="Anxiety_objective_1">
                                Looking restless
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_objective[]" value="Looks tense" id="Anxiety_objective_2">
                            <label class="form-check-label" for="Anxiety_objective_2">
                                Looks tense
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_objective[]" value="Hard to sleep" id="Anxiety_objective_3">
                            <label class="form-check-label" for="Anxiety_objective_3">
                                Hard to sleep
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <p> Minor Criteria </p>
                <div class="card card-custom">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label  class="form-control">1. Subjective</label>
                            <div id="Anxiety_subjective_1" class="d-flex flex-wrap">
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_subjective_1[]" value="Complaining dizzy" id="Anxiety_subjective_1_1">
                                    <label class="form-check-label" for="Anxiety_subjective_1_1">
                                        Complaining dizzy
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_subjective_1[]" value="Anorexia" id="Anxiety_subjective_1_2">
                                    <label class="form-check-label" for="Anxiety_subjective_1_2">
                                        Anorexia
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_subjective_1[]" value="Palpitations" id="Anxiety_subjective_1_3">
                                    <label class="form-check-label" for="Anxiety_subjective_1_3">
                                        Palpitations
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_subjective_1[]" value="Feeling helpless" id="Anxiety_subjective_1_4">
                                    <label class="form-check-label" for="Anxiety_subjective_1_4">
                                        Feeling helpless
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label  class="form-control">B. Objective</label>
                            <div id="Anxiety_objective_1" class="d-flex flex-wrap">
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Increased respiratory rate" id="Anxiety_objective_1_1">
                                    <label class="form-check-label" for="Anxiety_objective_1_1">
                                        Increased respiratory rate
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Increased pulse rate" id="Anxiety_objective_1_2">
                                    <label class="form-check-label" for="Anxiety_objective_1_2">
                                        Increased pulse rate
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Increased blood pressure" id="Anxiety_objective_1_3">
                                    <label class="form-check-label" for="Anxiety_objective_1_3">
                                        Increased blood pressure
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Diaphoresis" id="Anxiety_objective_1_4">
                                    <label class="form-check-label" for="Anxiety_objective_1_4">
                                        Diaphoresis
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Tremor" id="Anxiety_objective_1_5">
                                    <label class="form-check-label" for="Anxiety_objective_1_5">
                                        Tremor
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Face looks pale" id="Anxiety_objective_1_6">
                                    <label class="form-check-label" for="Anxiety_objective_1_6">
                                        Face looks pale
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Vibrating voice" id="Anxiety_objective_1_7">
                                    <label class="form-check-label" for="Anxiety_objective_1_7">
                                        Vibrating voice
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Bad eye contact" id="Anxiety_objective_1_8">
                                    <label class="form-check-label" for="Anxiety_objective_1_8">
                                        Bad eye contact
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Frequent urination" id="Anxiety_objective_1_9">
                                    <label class="form-check-label" for="Anxiety_objective_1_9">
                                        Frequent urination
                                    </label>
                                </div>
                                <div class="form-check py-2 mx-2">
                                    <input class="form-check-input" type="checkbox" name="Anxiety_objective_1[]" value="Oriented to the past" id="Anxiety_objective_1_10">
                                    <label class="form-check-label" for="Anxiety_objective_1_10">
                                        Oriented to the past
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label  class="form-control"> Anxiety Related Clinical Conditions</label>
                    <div id="Anxiety_related_condition" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_related_condition[]" value="Progressive chronic disease (eg cancer, autoimmune disease)" id="Anxiety_related_condition_1">
                            <label class="form-check-label" for="Anxiety_related_condition_1">
                                Progressive chronic disease (eg cancer, autoimmune disease)
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_related_condition[]" value="Acute illness" id="Anxiety_related_condition_2">
                            <label class="form-check-label" for="Anxiety_related_condition_2">
                                Acute illness
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_related_condition[]" value="Hospitalization" id="Anxiety_related_condition_3">
                            <label class="form-check-label" for="Anxiety_related_condition_3">
                                Hospitalization
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_related_condition[]" value="Operation plan" id="Anxiety_related_condition_4">
                            <label class="form-check-label" for="Anxiety_related_condition_4">
                                Operation plan
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_related_condition[]" value="The condition of the disease diagnosis is not clear" id="Anxiety_related_condition_5">
                            <label class="form-check-label" for="Anxiety_related_condition_5">
                                The condition of the disease diagnosis is not clear
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_related_condition[]" value="Neurological disease" id="Anxiety_related_condition_6">
                            <label class="form-check-label" for="Anxiety_related_condition_6">
                                Neurological disease
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="Anxiety_related_condition[]" value="Growth stage" id="Anxiety_related_condition_7">
                            <label class="form-check-label" for="Anxiety_related_condition_7">
                                Growth stage
                            </label>
                        </div>
                    </div>
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


        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label  class="form-control">Related Clinical Conditions</label>
                    <div id="risk_related_conditions" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="risk_related_conditions[]" value="Progressive chronic disease (eg cancer, autoimmune disease)" id="risk_related_conditions_1">
                            <label class="form-check-label" for="risk_related_conditions_1">
                                Progressive chronic disease (eg cancer, autoimmune disease)
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="risk_related_conditions[]" value="Acute illness" id="risk_related_conditions_2">
                            <label class="form-check-label" for="risk_related_conditions_2">
                                Acute illness
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="risk_related_conditions[]" value="Hospitalization" id="risk_related_conditions_3">
                            <label class="form-check-label" for="risk_related_conditions_3">
                                Hospitalization
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="risk_related_conditions[]" value="Operation plan" id="risk_related_conditions_4">
                            <label class="form-check-label" for="risk_related_conditions_4">
                                Operation plan
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="risk_related_conditions[]" value="The condition of the disease diagnosis is not clear" id="risk_related_conditions_5">
                            <label class="form-check-label" for="risk_related_conditions_5">
                                The condition of the disease diagnosis is not clear
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="risk_related_conditions[]" value="Neurological disease" id="risk_related_conditions_6">
                            <label class="form-check-label" for="risk_related_conditions_6">
                                Neurological disease
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="risk_related_conditions[]" value="Growth stage" id="risk_related_conditions_7">
                            <label class="form-check-label" for="risk_related_conditions_7">
                                Growth stage
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="status_penyakit">Selected Pain</label>
                    <select class="form-control" id="status_penyakit" name="status_penyakit">
                        <option value="Acute_pain">Acute Pain</option>
                        <option value="Ineffective">Ineffective peripheral perfusion </option>
                        <option value="Hypervolemia">Hypervolemia</option>
                        <option value="Anxiety">Anxiety</option>
                        <option value="Risk">Risk for Decreased Cardiac output</option>
                    </select>
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary"></button>

    </form>


@endsection
