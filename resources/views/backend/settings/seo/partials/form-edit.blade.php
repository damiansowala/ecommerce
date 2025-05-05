<?php
use App\Enums\BoolenEnum;
use App\Enums\RobotsEnum;
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header card-custome">
                Konfiguracja SEO
            </div>
            <div class="card-body">
                <form action="{{ route('settings-seo.update') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="mb-3">
                                <label for="meta_title" class="form-label">Meta title {!! TooltipHelper::tooltip(TooltipEnum::SETTINGS_SEO_META_TITLE) !!}</label>
                                <input type="text" id="meta_title" name="meta_title" class="form-control mb-2" aria-describedby="passwordHelpBlock" maxlength="70" value="{{ $data->meta_title ?? '' }}">




                                <div id="metatitleProgress" class="progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 0%">0%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="meta_description" class="form-label">Meta description {!! TooltipHelper::tooltip(TooltipEnum::SETTINGS_SEO_META_DESCRIPTION) !!}</label>

                                <textarea class="form-control mb-2" id="meta_description" name="meta_description" rows="3" maxlength="200">{{$data->meta_description ?? ''}}</textarea>






                                <div id="metadescProgress" class="progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-success" style="width: 0%">0%</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="meta_keywords" class="form-label">Meta keywords {!! TooltipHelper::tooltip(TooltipEnum::SETTINGS_SEO_META_KEYWORDS) !!}</label>

                                <input type="text" id="meta_keywords" name="meta_keywords" class="form-control" aria-describedby="passwordHelpBlock" value="{{$data->meta_keywords ?? ''}}">





                            </div>
                        </div>
                        <div class=" col-md-4 col-12">
                            <div class="mb-3">
                                <label for="robots" class="col-form-label">Meta robots {!! TooltipHelper::tooltip(TooltipEnum::SETTINGS_SEO_META_ROBOTS) !!}</label>
                                <select class="form-select" name="robots" id="robots">
                                    @foreach(RobotsEnum::options() as $value)
                                    <option value="{{ $value }}" {{ old('robots') == $value ? 'selected' : '' }}>
                                        {{ RobotsEnum::from($value)->label() }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="oggtype" class="col-form-label">Ogg type {!! TooltipHelper::tooltip(TooltipEnum::SETTINGS_SEO_OG_TYPE) !!}</label>
                                <select class="form-select" name="oggtype" id="oggtype" aria-label="Default select example">
                                    @foreach(OggEnmu::options() as $value)
                                    <option value="{{ $value }}" {{ old('robots') == $value ? 'selected' : '' }}>
                                        {{ OggEnmu::from($value)->label() }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sitemap" class="col-form-label">Pokaż strone w Sitemap {!! TooltipHelper::tooltip(TooltipEnum::SETTINGS_SEO_OG_TYPE) !!}</label>
                                <select class="form-select" name="sitemap" id="sitemap">
                                    @foreach(BoolenEnum::options() as $value)
                                    <option value="{{ $value }}" {{ old('active') == $value ? 'selected' : '' }}>
                                        {{ BoolenEnum::from($value)->label() }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="datastructural" class="col-form-label">Generuj dane strukturalne {!! TooltipHelper::tooltip(TooltipEnum::SETTINGS_SEO_OG_TYPE) !!}</label>
                                <select class="form-select" id="datastructural" name="datastructural" aria-label="Default select example">
                                    @foreach(BoolenEnum::options() as $value)
                                    <option value="{{ $value }}" {{ old('active') == $value ? 'selected' : '' }}>
                                        {{ BoolenEnum::from($value)->label() }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // Funkcja do aktualizacji paska postępu
    function updateProgressBar(inputElement, progressBarElement, maxLength) {
        const currentLength = inputElement.value.length;
        const percentage = (currentLength / maxLength) * 100;
        // Ustawienie szerokości paska postępu
        progressBarElement.querySelector('.progress-bar').style.width = `${percentage}%`;
        // Ustawienie tekstu w pasku
        progressBarElement.querySelector('.progress-bar').textContent = `${Math.round(percentage)}%`;
        // Zmiana koloru w odwrotnej kolejności
        if (percentage == 0) {
            progressBarElement.querySelector('.progress-bar').classList.remove('bg-success', 'bg-warning');
            progressBarElement.querySelector('.progress-bar').classList.add('bg-danger');
        } else if (percentage == 100) {
            progressBarElement.querySelector('.progress-bar').classList.remove('bg-danger', 'bg-warning');
            progressBarElement.querySelector('.progress-bar').classList.add('bg-success');
        } else if (percentage < 50) {
            progressBarElement.querySelector('.progress-bar').classList.remove('bg-success', 'bg-warning');
            progressBarElement.querySelector('.progress-bar').classList.add('bg-danger');
        } else if (percentage >= 50 && percentage < 80) {
            progressBarElement.querySelector('.progress-bar').classList.remove('bg-success', 'bg-danger');
            progressBarElement.querySelector('.progress-bar').classList.add('bg-warning');
        } else {
            progressBarElement.querySelector('.progress-bar').classList.remove('bg-warning', 'bg-danger');
            progressBarElement.querySelector('.progress-bar').classList.add('bg-success');
        }
    }
    // Inicjalizacja pól tekstowych i nasłuchiwanie zmian
    const metaTitle = document.getElementById('meta_title');
    const metaDesc = document.getElementById('meta_description');

    if (metaTitle) {
        // Aktualizacja paska postępu zaraz po załadowaniu strony
        updateProgressBar(metaTitle, document.getElementById('metatitleProgress'), 70);

        // Nasłuchiwanie zmian w polu meta_title
        metaTitle.addEventListener('input', function() {
            updateProgressBar(this, document.getElementById('metatitleProgress'), 70);
        });
    }

    if (metaDesc) {
        // Aktualizacja paska postępu zaraz po załadowaniu strony
        updateProgressBar(metaDesc, document.getElementById('metadescProgress'), 200);

        // Nasłuchiwanie zmian w polu meta_description
        metaDesc.addEventListener('input', function() {
            updateProgressBar(this, document.getElementById('metadescProgress'), 200);
        });
    }

</script>
