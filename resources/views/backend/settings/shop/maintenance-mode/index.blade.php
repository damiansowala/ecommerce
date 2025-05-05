@extends('backend/layouts.app', ['pageTitle' => 'Tryb konserwacyjny'])


@section('content')




<div class="row">

    <div class="col-12 col-md-6">

        <div class="row g-3 align-items-center mb-3">





            <div class="col-3">
                <label for="inputPassword6" class="col-form-label">Tryb ręczny</label>
            </div>
            <div class="col-9">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio1">Włącz</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio2">Wyłącz</label>
                </div>

            </div>
        </div>

        <div class="row g-3 align-items-center">

            <div class="col-3">
                <label for="inputPassword6" class="col-form-label">Tryb automatyczny</label>
            </div>
            <div class="col-9">
                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio1" id="btnradio3" autocomplete="off" checked>
                    <label class="btn btn-outline-primary" for="btnradio3">Włącz</label>

                    <input type="radio" class="btn-check" name="btnradio1" id="btnradio4" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btnradio4">Wyłącz</label>
                </div>

            </div>

        </div>




    </div>
    <div class="col-12 col-md-6">
        <div class="alert alert-info" role="alert">

            <h4>Jak działa tryb koncerwacyjny?</h4>

            <p> W trybie konserwacyjnym aplikacja zamiast standardowej zawartości wyświetla stronę informującą o pracach serwisowych. Administratorzy i deweloperzy zazwyczaj mają możliwość dostępu do aplikacji w tym trybie, co umożliwia im testowanie i kontrolowanie wprowadzanych zmian.</p>

            <h4> Po co jest tryb konserwacyjny?</h4>

            <ul>
                <li>
                    <h6> Bezpieczeństwo i stabilność</h6>
                    <p>W trakcie aktualizacji lub wprowadzania zmian istnieje ryzyko, że użytkownicy mogą napotkać błędy lub niestabilne działanie aplikacji. Tryb konserwacyjny blokuje dostęp, co pozwala uniknąć sytuacji, w których użytkownicy mogliby złożyć zamówienie lub dokonać transakcji, kiedy system jest niestabilny.</p>
                </li>
                <li>
                    <h6>Zapewnienie spójności danych</h6>
                    <p>Jeśli aktualizacja dotyczy bazy danych, włączenie trybu konserwacyjnego minimalizuje ryzyko, że użytkownicy będą dokonywać zmian w danych (np. zamówienia, koszyk, rejestracja), które mogłyby zostać utracone lub uszkodzone podczas migracji.</p>
                </li>
                <li>
                    <h6>Komunikacja z użytkownikami</h6>
                    <p>Tryb konserwacyjny pozwala przekazać użytkownikom jasny komunikat, że strona chwilowo nie jest dostępna z powodu prac serwisowych. Można również przewidzieć informację, kiedy aplikacja będzie znowu aktywna.</p>
                </li>
                <li>
                    <h6>Prace serwisowe</h6>

                    <p>Tryb konserwacyjny pozwala na testowanie nowych funkcji lub wprowadzanie poprawek w czasie, gdy użytkownicy nie mogą korzystać z aplikacji, co zmniejsza ryzyko wystąpienia błędów na stronie produkcyjnej.</p>


                </li>

            </ul>

        </div>

    </div>

</div>




@endsection
