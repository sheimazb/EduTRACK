<!-- Dashboard Enseignant -->
@extends('layouts.master_enseignant')
@section('content')
    <div class="contents">
        @include('includes.breadcrumb')
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <!-- HTML -->
                        <div id="timer"
                             style="text-align: center; color: #0a0b11; font-size: 72px;margin: 50px"
                        >00:00:00
                        </div>
                        <div class="atbd-button-list d-flex flex-wrap"
                             style=" padding-left: 150px; padding-right: 150px; padding-bottom: 70px;margin-left: 250px;">
                            <button class="btn btn-success btn-default btn-squared btn-shadow-success "
                                    id="start-button">
                                Pointer
                            </button>
                            <button class="btn btn-warning btn-default btn-squared btn-shadow-warning "
                                    id="pause-button">
                                Pause
                            </button>
                            <button class="btn btn-danger btn-default btn-squared btn-shadow-danger " id="stop-button">
                                Pointer la sortie
                            </button>
                        </div>
                        <div><h1 id="duree-pointage" style="text-align: center; margin: 20px"></h1></div>
                        <div><h1 id="duree-pause" style="text-align: center"></h1></div>
                        <div><h1 id="current-day" style="text-align: center"></h1></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // JavaScript
        let isTimerRunning = false;
        let startTime = 0;
        let intervalId;
        let pauseStartTime = 0;
        let pauseDuration = 0;
        let pauseIntervalId;

        // Fonction pour rendre les boutons indisponibles
       function disableButtons() {
            $('#start-button, #pause-button').prop('disabled', true);
        }

        // Fonction pour rendre les boutons disponibles
        function enableButtons() {
            $('#start-button, #pause-button').prop('disabled', flase);
        }

        // Vérifiez si les boutons doivent être disponibles ou non
        function checkButtonAvailability() {
            const currentDate = new Date();
            const currentHour = currentDate.getHours();
            const currentMinute = currentDate.getMinutes();

            // Si l'heure actuelle est 00h (minuit), les boutons sont disponibles
            if (currentHour === 0 && currentMinute === 0) {
                enableButtons();
            } else {
                disableButtons();
            }
        }

        // Vérifiez la disponibilité des boutons au chargement de la page
       checkButtonAvailability();

        function loadTimerState() {
            const timerState = JSON.parse(localStorage.getItem('timerState'));

            if (timerState) {
                startTime = timerState.startTime;
                pauseDuration = timerState.pauseDuration;
                isTimerRunning = timerState.isTimerRunning;

                if (isTimerRunning) {
                    intervalId = setInterval(updateTimer, 1000);
                }

                updateTimer();
            }
        }

        function saveTimerState() {
            const timerState = {
                startTime,
                pauseDuration,
                isTimerRunning
            };
            localStorage.setItem('timerState', JSON.stringify(timerState));
        }

        // Chargement de l'état du chronomètre lors du chargement de la page
        loadTimerState();

        $('#start-button').click(function() {
            if (!isTimerRunning) {
                if (pauseIntervalId) {
                    clearInterval(pauseIntervalId); // Arrêtez le compteur de pause
                    pauseDuration += new Date().getTime() - pauseStartTime;
                }
                if (!startTime) {
                    startTime = new Date().getTime() - (pauseDuration || 0);
                }
                isTimerRunning = true;
                intervalId = setInterval(updateTimer, 1000); // Met à jour le chronomètre chaque seconde
            }
            saveTimerState();
        });

        $('#pause-button').click(function() {
            if (isTimerRunning) {
                clearInterval(intervalId); // Arrêtez l'intervalle de mise à jour du chronomètre
                isTimerRunning = false;

                // Démarrez un compteur pour la durée de la pause
                pauseStartTime = new Date().getTime();
                pauseIntervalId = setInterval(updatePauseTimer, 1000);
            }
         saveTimerState();
        });

        $('#stop-button').click(function() {
            if (isTimerRunning) {
                clearInterval(intervalId); // Arrêtez l'intervalle de mise à jour du chronomètre
                isTimerRunning = false;
                clearInterval(pauseIntervalId); // Arrête le compteur de pause

                // Calculez la durée du pointage
                const currentTime = new Date().getTime();
                const elapsedTime = currentTime - startTime - pauseDuration;
                const formattedTime = formatTime(elapsedTime);

                // Affichez la durée du pointage
                $('#duree-pointage').text(`Heures du jour : ${formattedTime}`);

                // Réinitialisez le chronomètre et les compteurs de temps
                $('#timer').text('00:00:00');

                // Affichez la date actuelle au format "jour/mois/année"
                const currentDate = new Date();
                const day = currentDate.getDate();
                const month = currentDate.getMonth() + 1; // Ajoutez 1 car les mois commencent à 0 (janvier)
                const year = currentDate.getFullYear();
                const formattedDate = `${day}/${month}/${year}`;
                $('#current-day').text(`Date : ${formattedDate}`);

                startTime = 0;
                pauseDuration = 0;

               saveTimerState();

                // Rendez les boutons indisponibles
               checkButtonAvailability();
            }
        });

        function updateTimer() {
            const currentTime = new Date().getTime();
            const elapsedTime = currentTime - startTime - pauseDuration;
            const formattedTime = formatTime(elapsedTime);
            $('#timer').text(formattedTime);

            saveTimerState();
        }

        function updatePauseTimer() {
            const currentTime = new Date().getTime();
            pauseDuration += currentTime - pauseStartTime;
            pauseStartTime = currentTime;
            const formattedPauseTime = formatTime(pauseDuration);
            $('#duree-pause').text(`Durée de la pause : ${formattedPauseTime}`);

            saveTimerState();
        }

        function formatTime(milliseconds) {
            const seconds = Math.floor(milliseconds / 1000);
            const minutes = Math.floor(seconds / 60);
            const hours = Math.floor(minutes / 60);

            const formattedHours = padZero(hours % 24);
            const formattedMinutes = padZero(minutes % 60);
            const formattedSeconds = padZero(seconds % 60);

            return `${formattedHours}:${formattedMinutes}:${formattedSeconds}`;
        }

        function padZero(number) {
            return number.toString().padStart(2, '0');
        }
    </script>
@endsection
