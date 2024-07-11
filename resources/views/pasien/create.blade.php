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
                <div class="form-group mb-2">
                    <label for="keluhan"> Complaint </label>
                    <select name="keluhan" id="keluhan" class="form-control">
                        <option value="Headache">Headache</option>
                        <option value="Dizzy">Dizzy</option>
                        <option value="Stiff Neck">Stiff Neck</option>
                        <option value="Blurred Vission">Blurred Vission</option>
                        <option value="Easy Fatigue">Easy Fatigue</option>
                        <option value="Restless">Restless</option>
                        <option value="Palpitations">Palpitations</option>
                        <option value="Impotence">Impotence</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="riwayat_penyakit"> Current Medical History </label>
                    <select name="riwayat_penyakit" id="riwayat_penyakit" class="form-control">
                        <option value="Headaches">Headaches</option>
                        <option value="Dizzy">Dizzy</option>
                        <option value="Dizziness immediately">Dizziness immediately after waking up and gradually disaspears
                            after a few hours</option>
                        <option value="Blurred Vission">Blurred Vission</option>
                        <option value="Nausseous">Nausseous</option>
                        <option value="Irregular Heartbeat">Irregular Heartbeat</option>
                        <option value="Chest Pain">Chest Pain</option>
                        <option value="Pulse">Pulse</option>
                        <option value="Blood Pleasure">Blood Pleasure</option>
                        <option value="Body Temperature">Body Temperature</option>
                        <option value="Breathing">Breathing</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="riwayat_alergi">Medical History First</label>
                    <select name="riwayat_alergi" id="riwayat_alergi" class="form-control">
                        <option value="Asses the presence of a history of hypertension">Asses the presence of a history of hypertension</option>
                        <option value="Heart Disease">Heart Disease</option>
                        <option value="Kidney Disease">Kidney Disease</option>
                        <option value="Stroke">Stroke</option>
                        <option value="Past History Of Drug Use">Past History Of Drug Use</option>
                        <option value="History Of Allergy To Drug">History Of Allergy To Drug</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="riwayat_penyakit_keluarga">Family Medical History</label>
                    <select name="riwayat_penyakit_keluarga" id="riwayat_penyakit_keluarga" class="form-control">
                        <option value="Family History of Hypertension">Family History of Hypertension</option>
                        <option value="Family History of Metabolic Disease">Family History of Metabolic Disease</option>
                        <option value="Family There Are Infectious Disease Such as Tuberculosis, Hiv, Urinary Tract Infectious">Family There Are Infectious Disease Such as Tuberculosis, Hiv, Urinary Tract Infectious</option>
                        <option value="Family History of Diabetes Mellitus">Family History of Diabetes Mellitus</option>
                        <option value="Family History of Asthma">Family History of Asthma</option>
                        <option value="Family History of Other Disease">Family History of Other Disease</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="aktifitas_sehari_hari"> Acivity / Rest</label>
                    <select name="aktifitas_sehari_hari" id="aktifitas_sehari_hari" class="form-control">
                        <option value="The downsides of activites">The downsides of activites</option>
                        <option value="Tired">Tired</option>
                        <option value="Shortness Of Breath">Shortness Of Breath</option>
                        <option value="Incressed heart frequency">Incressed heart frequency</option>
                        <option value="Changes in heart rhythm">Changes in heart rhythm</option>
                        <option value="Tachypnea">Tachypnea</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="sirkulasi"> Circulation</label>
                    <select name="sirkulasi" id="sirkulasi" class="form-control">
                        <option value="History of hypertension">History of hypertension</option>
                        <option value="Atherosclerosis">Atherosclerosis</option>
                        <option value="Coronary heart dieseas">Coronary heart dieseas</option>
                        <option value="Cerebrovascular dieases">Cerebrovascular dieases</option>
                        <option value="Incressed blood preaseure">Incressed blood preaseure</option>
                        <option value="Pulse tachycardia">Pulse tachycardia</option>
                        <option value="Murmur">Murmur</option>
                        <option value="Jugular vein distension">Jugular vein distension</option>
                        <option value="Pale Skin">Pale Skin</option>
                        <option value="Cyanosis">Cyanosis</option>
                        <option value="Cold temperature">Cold temperature</option>
                        <option value="Slow capillary filling">Slow capillary filling</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="integritas_ego"> Ego Integrity </label>
                    <select name="integritas_ego" id="integritas_ego" class="form-control">
                        <option value="Anxiety">Anxiety</option>
                        <option value="Stress">Stress</option>
                        <option value="Restless">Restless</option>
                        <option value="Pop mood">Pop mood</option>
                        <option value="Narrowing of attention">Narrowing of attention</option>
                        <option value="Improved speech patterns">Improved speech patterns</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="eliminasi"> Elimination </label>
                    <select name="eliminasi" id="eliminasi" class="form-control">
                        <option value="Renal impariment/history of renal impairmen">Renal impariment/history of renal impairmen</option>
                        <option value="Urine insecurity">Urine insecurity</option>
                        <option value="Little urine">Little urine</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="nurtiris"> Food / Liquid</label>
                    <select name="nutrisi" id="nutrisi" class="form-control">
                        <option value="Foods high in salt">Foods high in salt</option>
                        <option value="Foods high in fat and cholestrol">Foods high in fat and cholestrol</option>
                        <option value="Enjoy ready to ead food">Enjoy ready to ead food</option>
                        <option value="Enjoying food with food">Enjoying food with food</option>
                        <option value="Enjoying fried food">Enjoying fried food</option>
                        <option value="Nauseous">Nauseous</option>
                        <option value="Vomit">Vomit</option>
                        <option value="Weight Loss">Weight Loss</option>
                        <option value="Weight gain">Weight gain</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="rasa_sakit"> Pain / Discomfot</label>
                    <select name="rasa_sakit" id="rasa_sakit" class="form-control">
                        <option value="Headache">Headache</option>
                        <option value="Chest pain">Chest pain</option>
                        <option value="Afternoon throat">Afternoon throat</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="pernapasan">
                        <label for="pernapasan"> Breathing </label>
                        <select name="pernapasan" id="pernapasan" class="form-control">
                            <option value="Dyspnoea if you are active">Dyspnoea if you are active</option>
                            <option value="Tachpnoea">Tachpnoea</option>
                            <option value="Orthopnoea">Orthopnoea</option>
                            <option value="Cough and sputum">Cough and sputum</option>
                            <option value="The sound of breathing (wheezing)">The sound of breathing (wheezing)</option>
                            <option value="Cyanosis">Cyanosis</option>
                        </select>
                    </label>
                </div>
                <div class="form-group mb-2">
                    <label for="keamanan"> Security </label>
                    <select name="keamanan" id="keamanan" class="form-control">
                        <option value="Cordination/Walking disorders">Cordination/Walking disorders</option>
                        <option value="Postural hypotension">Postural hypotension</option>
                    </select>
                </div>
            </div>
        </div>


        {{-- NURSING --}}
        <div class="card custom-card">
            <div class="card-header">
                <h4>NURSING DIAGNOSIS</h4>
            </div>
            <div class="card-body">
                <div class="form-group mb-2">
                    <label for="physiological_injury"> Physiological Injury Agents</label>
                    <select name="physiological_injury" id="physiological_injury">
                        <option value="Inflammatory">Inflammatory</option>
                        <option value="Ischemia">Ischemia</option>
                        <option value="Neoplasm">Neoplasm</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <p>Limitations Characteristic</p>
                <div class="form-group mb-2">
                    <label for="physiological_injury_minor_a"> </label>
                </div>
            </div>
        </div>
    </form>


@endsection
