<?php
/**
 * validation.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

return [
    'iban'                           => 'Questo non è un valido IBAN.',
    'unique_account_number_for_user' => 'Sembra che questo numero di account è già in uso.',
    'rule_trigger_value'             => 'Questo valore non è valido per il trigger selezionato.',
    'rule_action_value'              => 'Questo valore non è valido per l\'azione selezionata.',
    'invalid_domain'                 => 'A causa di vincoli di sicurezza, non è possibile registrare da questo dominio.',
    'file_already_attached'          => 'File caricato ":il nome" è già collegato a questo oggetto.',
    'file_attached'                  => 'Con successo file caricato ":il nome".',
    'file_invalid_mime'              => 'File ":il nome" è di tipo ":mime", che non è accettato come un nuovo upload.',
    'file_too_large'                 => 'File ":nome di" è troppo grande.',
    'belongs_to_user'                => 'Il valore di attributo è sconosciuto',
    'accepted'                       => 'L\' :attribute deve essere accettato.',
    'active_url'                     => 'L\' :attributo non è un URL valido.',
    'after'                          => 'L\' :attributo deve essere una data dopo data.',
    'alpha'                          => 'L\' :attributo può contenere solo lettere.',
    'alpha_dash'                     => 'L\' :attributo può contenere solo lettere, numeri e trattini.',
    'alpha_num'                      => 'L\' :attributo può contenere solo lettere e numeri.',
    'array'                          => 'L\' :attributo deve essere un array.',
    'unique_for_user'                => 'C\'è già una voce con questo :attributo.',
    'before'                         => 'L\' :attributo deve essere una data precedente :data.',
    'unique_object_for_user'         => 'Questo nome è già in uso',
    'unique_account_for_user'        => 'Questo il nome dell\'account è già in uso',
    'between.numeric'                => 'L\' :attribute deve essere compresa tra :min e max.',
    'between.file'                   => 'L\' :attribute deve essere compresa tra :min e max kilobyte.',
    'between.string'                 => 'L\' :attribute deve essere compresa tra :min e max di caratteri.',
    'between.array'                  => 'L\' :attribute deve essere compresa tra :min e max di elementi.',
    'boolean'                        => 'L\' :campo attributo deve essere true o false.',
    'confirmed'                      => 'L\' :attributo di conferma non corrisponde.',
    'date'                           => 'L\' :attributo non è una data valida.',
    'date_format'                    => 'L\' :attributo non corrisponde al formato :formato.',
    'different'                      => 'L\' :attributo e :altri devono essere diversi.',
    'digits'                         => 'L\' :attributo deve essere :cifre cifre.',
    'digits_between'                 => 'L\' :attribute deve essere compresa tra :min e max cifre.',
    'email'                          => 'L\' :attributo deve essere un indirizzo email valido.',
    'filled'                         => 'L\' :attributo di campo è obbligatorio.',
    'exists'                         => 'Selezionato :attributo non è valido.',
    'image'                          => 'L\' :attributo deve essere un\'immagine.',
    'in'                             => 'Selezionato :attributo non è valido.',
    'integer'                        => 'L\' :attributo deve essere un numero intero.',
    'ip'                             => 'L\' :attributo deve essere un indirizzo IP valido.',
    'json'                           => 'L\' :attributo deve essere un valido stringa JSON.',
    'max.numeric'                    => 'L\' :attributo non può essere maggiore di :max.',
    'max.file'                       => 'L\' :attributo non può essere superiore a :max kilobyte.',
    'max.string'                     => 'L\' :attributo non può essere superiore :a) a caratteri max.',
    'max.array'                      => 'L\' :attributo non può avere più di :elementi max.',
    'mimes'                          => 'L\' :attributo deve essere un file di tipo: :i valori.',
    'min.numeric'                    => 'L\' :attribute deve essere di almeno :min.',
    'min.file'                       => 'L\' :attribute deve essere di almeno :min kilobyte.',
    'min.string'                     => 'L\' :attribute deve essere di almeno :min caratteri.',
    'min.array'                      => 'L\' :attributo deve avere almeno :min elementi.',
    'not_in'                         => 'Selezionato :attributo non è valido.',
    'numeric'                        => 'L\' :attributo deve essere un numero.',
    'regex'                          => 'L\' :attributo formato non è valido.',
    'required'                       => 'L\' :attributo di campo è obbligatorio.',
    'required_if'                    => 'L\' :attributo di campo è obbligatorio quando :altro :valore di.',
    'required_unless'                => 'L\' :attributo di campo è obbligatorio, a meno che :altri :i valori.',
    'required_with'                  => 'L\' :attributo di campo è obbligatorio quando :valori è presente.',
    'required_with_all'              => 'L\' :attributo di campo è obbligatorio quando :valori è presente.',
    'required_without'               => 'L\' :attributo di campo è obbligatorio quando i valori non è presente.',
    'required_without_all'           => 'L\' :attributo di campo è obbligatorio se nessuno dei valori presenti.',
    'same'                           => 'L\' :attributo e :altri devono corrispondere.',
    'size.numeric'                   => 'L\' :attributo :dimensione.',
    'size.file'                      => 'L\' :attributo :dimensione in kilobyte.',
    'size.string'                    => 'L\' :attributo :dimensione caratteri.',
    'size.array'                     => 'L\' :attributo deve contenere :elementi di formato.',
    'unique'                         => 'L\' :attributo è già stata presa.',
    'string'                         => 'L\' :attributo deve essere una stringa.',
    'url'                            => 'L\' :attributo formato non è valido.',
    'timezone'                       => 'L\' :attributo deve essere una zona valida.',
    '2fa_code'                       => 'L\' :attributo di campo non è valido.',
    'dimensions'                     => 'L\' :attributo non valido per le dimensioni dell\'immagine.',
    'distinct'                       => 'L\' :campo attributo ha un valore duplicato.',
    'file'                           => 'L\' :attributo deve essere un file.',
    'in_array'                       => 'L\' :attributo di campo non esiste in:.',
    'present'                        => 'L\' :attributo del campo deve essere presente.',
];