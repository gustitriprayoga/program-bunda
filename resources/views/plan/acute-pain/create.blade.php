@extends('layouts.master')

@section('title', 'Halaman Pasien')

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

    <!-- Start:: row-4 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between d-flex">
                    <div class="card-title">Acute Pain Plan</div>
            </div>
        </div>
    </div>

    <form action="{{ route('pasien.plan.acutepain.store') }}" method="POST">
        @csrf
        <div class="card custom-card">
            <div class="card-header">
                Add Nursing Planing Acute Pain
            </div>
            <div class="card-body">
                <label for="pasien_id"> Nama Pasien </label>
                <select name="pasien_id" id="pasien_id" class="form-control">
                    <option value="#">SELECT PATIENT</option>
                    @foreach ($pasiens as $item)
                        <option value="{{ $item->id }}"> {{ $item->nama }}</option>

                    @endforeach
                </select>
            </div>

        </div>

        <div class="card custom-card">
            <div class="card-body">
                <div class="card-body">
                    <div class="form-group mb-2">
                        <label class="form-control">Outcome criteria: Pain level (L.08066)(Tim Pokja SLKI DPP PPNI, 2018)</label>
                        <div id="outcome_criteria" class="d-flex flex-wrap">
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="outcome_criteria[]"
                                    value="The patient said the pain was reduced from a scale of 7 to 2"
                                    id="outcome_criteria_1">
                                <label class="form-check-label" for="outcome_criteria_1">
                                    The patient said the pain was reduced from a scale of 7 to 2
                                </label>
                            </div>
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="outcome_criteria[]"
                                    value="The patient shows a calm facial expression" id="outcome_criteria_2">
                                <label class="form-check-label" for="outcome_criteria_2">
                                    The patient shows a calm facial expression
                                </label>
                            </div>
                            <div class="form-check py-2 mx-2">
                                <input class="form-check-input" type="checkbox" name="outcome_criteria[]"
                                    value="Patients can rest comfortably" id="outcome_criteria_3">
                                <label class="form-check-label" for="outcome_criteria_3">
                                    Patients can rest comfortably
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card custom-card">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label class="form-control">Action plan: (Pain management I.08238)</label>
                    <div id="action_plan" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="action_plan[]"
                                value="Identify the location, characteristics of pain, duration, frequency, and intensity of pain"
                                id="action_plan_1">
                            <label class="form-check-label" for="action_plan_1">
                                Identify the location, characteristics of pain, duration, frequency, and intensity of pain
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="action_plan[]"
                                value="Identify pain scale" id="action_plan_2">
                            <label class="form-check-label" for="action_plan_2">
                                Identify pain scale
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="action_plan[]"
                                value="Identify factors that aggravate and relieve pain" id="action_plan_3">
                            <label class="form-check-label" for="action_plan_3">
                                Identify factors that aggravate and relieve pain
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card custom-card">
            <div class="card-body">
                <div class="form-group mb-2">
                    <label class="form-control">Give non-pharmacological therapy to reduce pain:</label>
                    <div id="reduce_pain" class="d-flex flex-wrap">
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="reduce_pain[]"
                                value="Cupping Therapy"
                                id="reduce_pain_1">
                            <label class="form-check-label" for="reduce_pain_1">
                                Cupping Therapy
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="reduce_pain[]"
                                value="Environmental controls that exacerbate pain (eg room temperature, lighting, noise)" id="reduce_pain_2">
                            <label class="form-check-label" for="reduce_pain_2">
                                Environmental controls that exacerbate pain (eg room temperature, lighting, noise)
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="reduce_pain[]"
                                value="Teach take a deep breath technique to reduce pain" id="reduce_pain_3">
                            <label class="form-check-label" for="reduce_pain_3">
                                Teach take a deep breath technique to reduce pain
                            </label>
                        </div>
                        <div class="form-check py-2 mx-2">
                            <input class="form-check-input" type="checkbox" name="reduce_pain[]"
                                value="Collaborative Natural Medicines, if necessary" id="reduce_pain_4">
                            <label class="form-check-label" for="reduce_pain_4">
                                Collaborative Natural Medicines, if necessary
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary"> Save </button>
    </form>
    <!-- End:: row-4 -->


@endsection
