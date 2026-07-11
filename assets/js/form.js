document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.querySelector('.form-wrap');

    function isValidName(name) {

        if (name.length > 50) return false;
        if (/\s{2,}/.test(name)) return false;
        return /^[A-Za-zÀ-ÖØ-öø-ÿ' -]+$/.test(name);
    }

    function isValidPhone(phone) {
        const cleaned = phone.replace(/[\s\-\(\)\.]/g, '');
        return /^(0[1-9]\d{8}|\+33[1-9]\d{8}|\+[1-9]\d{8,14})$/.test(cleaned);
    }

    function isValidEmail(email) {
        const trimmed = email.trim();
        return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(trimmed);
    }

    // Настройка для первого участника
    setupParticipantToggle('.participant-1', 'participant-age-1', {
        '5-7 ans': '#initiation-section-1',
        '8-9 ans': '#elem-1-section-1',
        '10-11 ans': '#elem-2-section-1',
        '12-14 ans': '#elem-3-section-1',
        '15-17 ans': '#ado-section-1',
        '18+ ans': '#adult-section-1'
    });

    // Настройка для второго участника
    setupParticipantToggle('.participant-2', 'participant-age-2', {
        '5-7 ans': '#initiation-section-2',
        '8-9 ans': '#elem-1-section-2',
        '10-11 ans': '#elem-2-section-2',
        '12-14 ans': '#elem-3-section-2',
        '15-17 ans': '#ado-section-2',
        '18+ ans': '#adult-section-2'
    });

    // Настройка для третьего участника
    setupParticipantToggle('.participant-3', 'participant-age-3', {
        '5-7 ans': '#initiation-section-3',
        '8-9 ans': '#elem-1-section-3',
        '10-11 ans': '#elem-2-section-3',
        '12-14 ans': '#elem-3-section-3',
        '15-17 ans': '#ado-section-3',
        '18+ ans': '#adult-section-3'
    });


    // Функция настройки переключения секций для участника
    function setupParticipantToggle(participantSelector, radioName, sections) {
        const participant = document.querySelector(participantSelector);
        if (!participant) return;

        const radios = participant.querySelectorAll(`input[name="${radioName}"]`);
        const container = participant.querySelector('.age-sections-container');

        if (!container) return;

        container.style.height = '0';
        container.style.overflow = 'hidden';
        container.style.transition = 'height 0.3s ease';

        let lastAge = null;

        function animateToggle(sectionSelector, show) {
            const section = participant.querySelector(sectionSelector);
            if (!section) return;

            if (show) {
                section.style.display = 'flex';
                section.style.flexDirection = window.innerWidth <= 624 ? 'column' : 'row';
                requestAnimationFrame(() => {
                    const fullHeight = section.scrollHeight;
                    container.style.height = fullHeight + 'px';
                    section.style.maxHeight = fullHeight + 'px';
                    section.classList.add('showing');
                });
            } else {
                section.style.maxHeight = section.scrollHeight + 'px';
                section.offsetHeight;
                section.style.maxHeight = '0';
                section.classList.remove('showing');
            }
        }

        function closeAllSections() {
            Object.values(sections).forEach(sectionSelector => {
                const section = participant.querySelector(sectionSelector);
                if (section) {
                    animateToggle(sectionSelector, false);
                    section.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
                }
            });
            container.style.overflow = 'hidden';
            container.style.height = '0';
            lastAge = null;
        }

        radios.forEach(radio => {
            radio.addEventListener('click', () => {
                const selected = radio.value;
                const isSame = lastAge === selected;

                if (isSame) {
                    radio.checked = false;
                    closeAllSections();
                } else {
                    if (lastAge && sections[lastAge]) {
                        animateToggle(sections[lastAge], false);
                    }

                    // Очищаем чекбоксы в других секциях
                    Object.entries(sections).forEach(([key, sectionSelector]) => {
                        if (key !== selected) {
                            const section = participant.querySelector(sectionSelector);
                            if (section) {
                                section.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = false);
                            }
                        }
                    });

                    lastAge = selected;
                    if (sections[selected]) {
                        setTimeout(() => animateToggle(sections[selected], true), 10);
                    }
                }
            });
        });

        // Скрытие сообщения об ошибке при выборе курса
        const checkboxes = participant.querySelectorAll('.age-sections-container input[type="checkbox"]');
        checkboxes.forEach(cb => {
            cb.addEventListener('change', function () {
                if (this.checked) {
                    document.querySelector('#validation-message .choose-class').style.display = 'none';
                }
            });
        });
    }

    // Настройка чекбокса "использовать то же имя"
    setupSameNameCheckbox();

    function setupSameNameCheckbox() {
        const firstParticipant = document.querySelector('.participant-1');
        const checkbox = firstParticipant?.querySelector('input[name="same-name-checkbox"]');
        if (!checkbox) return;

        checkbox.addEventListener('change', function () {
            const firstName = firstParticipant.querySelector('input[name="first-name-participant-1"]');
            const lastName = firstParticipant.querySelector('input[name="last-name-participant-1"]');

            if (this.checked) {
                firstName.value = document.getElementById('first-name').value;
                lastName.value = document.getElementById('last-name').value;
                firstName.disabled = true;
                lastName.disabled = true;
            } else {
                firstName.disabled = false;
                lastName.disabled = false;
            }
        });
        checkbox.disabled = true;

        // Включаем, если заполнено имя и фамилия контакта
        function toggleCheckboxState() {
            const contactFirst = document.getElementById('first-name');
            const contactLast = document.getElementById('last-name');

            if (contactFirst.value.trim() && contactLast.value.trim()) {
                checkbox.disabled = false;
            } else {
                checkbox.disabled = true;
                checkbox.checked = false;
            }
        }

        toggleCheckboxState();

        document.getElementById('first-name').addEventListener('input', toggleCheckboxState);
        document.getElementById('last-name').addEventListener('input', toggleCheckboxState);
    }

    // Обновление имен при изменении контактных данных
    document.getElementById('first-name').addEventListener('input', updateParticipantNames);
    document.getElementById('last-name').addEventListener('input', updateParticipantNames);

    function updateParticipantNames() {
        const firstParticipant = document.querySelector('.participant-1');
        const checkbox = firstParticipant?.querySelector('input[name="same-name-checkbox"]');
        if (checkbox && checkbox.checked) {
            const first = firstParticipant.querySelector('input[name="first-name-participant-1"]');
            const last = firstParticipant.querySelector('input[name="last-name-participant-1"]');
            first.value = document.getElementById('first-name').value;
            last.value = document.getElementById('last-name').value;
        }
    }

    // Управление показом/скрытием участников
    let participantCount = 1;
    const maxParticipants = 3;
    const firstHeading = document.querySelector('.participant-1 .participant-identity-1 h3');
    const originalHeadingText = firstHeading.textContent;

    document.querySelector('.remove-participant').style.display = 'none';

    // Кнопки добавления
    document.querySelector('.add-participant').addEventListener('click', function () {
        if (participantCount >= maxParticipants) return;

        participantCount++;

        if (participantCount === 2) {
            firstHeading.textContent = originalHeadingText + ' №1';
            $('.participant-2').slideDown(400);
            document.querySelector('.remove-participant').style.display = 'inline-block';
            document.querySelector('.add-remove-participant').style.justifyContent = 'space-between';
        } else if (participantCount === 3) {
            $('.participant-3').slideDown(400);
            document.querySelector('.add-participant').style.display = 'none';
            document.querySelector('.add-remove-participant').style.justifyContent = 'right';
        }
    });


    // Кнопки удаления
    document.querySelector('.remove-participant').addEventListener('click', function () {
        if (participantCount === 3) {
            $('.participant-3').slideUp(300, function () {
                clearParticipantFields(document.querySelector('.participant-3'));
            });
            participantCount--;
            document.querySelector('.add-participant').style.display = 'inline-block';
            document.querySelector('.add-remove-participant').style.justifyContent = 'space-between';
        } else if (participantCount === 2) {
            $('.participant-2').slideUp(300, function () {
                clearParticipantFields(document.querySelector('.participant-2'));
            });
            participantCount--;

            firstHeading.textContent = originalHeadingText;
            document.querySelector('.remove-participant').style.display = 'none';
        }

    });


    // Функция очистки полей участника
    function clearParticipantFields(participant) {
        participant.querySelectorAll('input').forEach(input => {
            if (input.type === 'radio' || input.type === 'checkbox') {
                input.checked = false;
            } else {
                input.value = '';
            }
        });

        // Сбрасываем высоту контейнера секций
        const container = participant.querySelector('.age-sections-container');
        if (container) {
            container.style.height = '0';
            container.style.overflow = 'hidden';
        }
    }

    // Обработка отправки формы
    const inscriptionForm = document.getElementById('inscription-form');
    if (inscriptionForm) {
        inscriptionForm.addEventListener('submit', function(e) {
            e.preventDefault();

            // Временно включаем disabled поля перед отправкой
            const disabledInputs = this.querySelectorAll('input:disabled');
            disabledInputs.forEach(input => input.disabled = false);

            const formData = new FormData(this);
            formData.append('action', 'inscription_form');
            formData.append('inscription_nonce', ajax_object.inscription_nonce);

            // Удаляем данные скрытых участников на основе счетчика
            const keysToDelete = [];
            for (let [key, value] of formData.entries()) {
                if (key.includes('participant-2') && participantCount < 2) {
                    keysToDelete.push(key);
                }
                if (key.includes('participant-3') && participantCount < 3) {
                    keysToDelete.push(key);
                }
            }
            keysToDelete.forEach(key => formData.delete(key));

            let hasError = false;

            // Проверка контактного имени и фамилии
            const contactFirstName = document.getElementById('first-name');
            const contactLastName = document.getElementById('last-name');

            contactFirstName.value = contactFirstName.value.trim();
            contactLastName.value = contactLastName.value.trim();

            if (!isValidName(contactFirstName.value)) {
                document.getElementById('error-contact-first-name').style.display = 'block';
                hasError = true;
            } else {
                document.getElementById('error-contact-first-name').style.display = 'none';
            }

            if (!isValidName(contactLastName.value)) {
                document.getElementById('error-contact-last-name').style.display = 'block';
                hasError = true;
            } else {
                document.getElementById('error-contact-last-name').style.display = 'none';
            }

            // Проверка участников
            for (let i = 1; i <= participantCount; i++) {
                const firstInput = document.getElementById(`first-name-participant-${i}`);
                const lastInput = document.getElementById(`last-name-participant-${i}`);

                if (firstInput && !isValidName(firstInput.value)) {
                    document.getElementById(`error-participant-${i}-first-name`).style.display = 'block';
                    hasError = true;
                } else if (firstInput) {
                    document.getElementById(`error-participant-${i}-first-name`).style.display = 'none';
                }

                if (lastInput && !isValidName(lastInput.value)) {
                    document.getElementById(`error-participant-${i}-last-name`).style.display = 'block';
                    hasError = true;
                } else if (lastInput) {
                    document.getElementById(`error-participant-${i}-last-name`).style.display = 'none';
                }
            }

            const phone = document.getElementById('phone');
            if (!isValidPhone(phone.value)) {
                document.getElementById('error-phone').style.display = 'block';
                hasError = true;
            } else {
                document.getElementById('error-phone').style.display = 'none';
            }

            const email = document.getElementById('email');
            if (!isValidEmail(email.value)) {
                document.getElementById('error-email').style.display = 'block';
                hasError = true;
            } else {
                document.getElementById('error-email').style.display = 'none';
            }

            if (hasError) return;


            // Возвращаем disabled состояние
            disabledInputs.forEach(input => input.disabled = true);

            for (let i = 1; i <= participantCount; i++) {
                const participant = document.querySelector(`.participant-${i}`);
                const container = participant.querySelector('.age-sections-container');
                const allCheckboxes = container.querySelectorAll(`input[name="schedule_${i}[]"]`);
                const checkedCheckboxes = container.querySelectorAll(`input[name="schedule_${i}[]"]:checked`);
                const hasChecked = checkedCheckboxes.length > 0;
                if (!hasChecked) {
                    document.querySelector('#validation-message .choose-class').style.display = 'block';
                    return;
                }
            }


            fetch(ajax_object.ajax_url, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.querySelector('#inscription-form-message .success').style.display = 'block';
                        document.getElementById('inscription-form').style.display = 'none';
                    } else {
                        // Показать ошибку с сервера
                        alert(data.data.message);
                    }
                })
                .catch(() => {
                    // Сетевые ошибки, проблемы с JSON и т.д.
                    document.querySelector('#inscription-form-message .error').style.display = 'block';
                });
        });
    }

    // Слушатели для проверки в реальном времени
    document.getElementById('first-name').addEventListener('input', function () {
        const errorBlock = document.getElementById('error-contact-first-name');
        if (this.value === '' || isValidName(this.value)) {
            errorBlock.style.display = 'none';
        } else {
            errorBlock.style.display = 'block';
        }
    });

    document.getElementById('last-name').addEventListener('input', function () {
        const errorBlock = document.getElementById('error-contact-last-name');
        if (this.value.trim() === '' || isValidName(this.value)) {
            errorBlock.style.display = 'none';
        } else {
            errorBlock.style.display = 'block';
        }
    });

    for (let i = 1; i <= 3; i++) {
        const firstInput = document.getElementById(`first-name-participant-${i}`);
        const firstError = document.getElementById(`error-participant-${i}-first-name`);

        if (firstInput && firstError) {
            firstInput.addEventListener('input', function () {
                firstError.style.display = (this.value.trim() === '' || isValidName(this.value)) ? 'none' : 'block';
            });
        }

        const lastInput = document.getElementById(`last-name-participant-${i}`);
        const lastError = document.getElementById(`error-participant-${i}-last-name`);

        if (lastInput && lastError) {
            lastInput.addEventListener('input', function () {
                lastError.style.display = (this.value.trim() === '' || isValidName(this.value)) ? 'none' : 'block';
            });
        }
    }

    document.getElementById('phone').addEventListener('input', function () {
        const errorBlock = document.getElementById('error-phone');
        if (this.value.trim() === '' || isValidPhone(this.value)) {
            errorBlock.style.display = 'none';
        } else {
            errorBlock.style.display = 'block';
        }
    });

    document.getElementById('email').addEventListener('input', function () {
        const errorBlock = document.getElementById('error-email');
        if (this.value.trim() === '' || isValidEmail(this.value)) {
            errorBlock.style.display = 'none';
        } else {
            errorBlock.style.display = 'block';
        }
    });

    document.querySelector('button[type="reset"]').addEventListener('click', function () {
        document.querySelectorAll('.error').forEach(el => el.style.display = 'none');
    });

});