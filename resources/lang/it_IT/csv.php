<?php
/**
 * csv.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

declare(strict_types = 1);

return [

    'import_configure_title' => 'Configurare l\'importazione',
    'import_configure_intro' => 'Ci sono alcune opzioni per il tuo file di importazione CSV. Si prega di indicare se il file CSV contiene intestazioni sulla prima colonna, e che il formato di data di data-campi. Questo potrebbe richiedere alcuni tentativi. Il delimitatore di campo è di solito a ",", ma potrebbe anche essere un ";". Controllare con attenzione.',
    'import_configure_form'  => 'Modulo',
    'header_help'            => 'Controllare se la prima riga del file CSV sono i titoli delle colonne',
    'date_help'              => 'Data ora formato CSV. Seguire il formato come <a href="https://secure.php.net/manual/en/datetime.createfromformat.php#refsect1-datetime.createfromformat-parameters">this page</a> indica. Il valore predefinito di analizzare date che assomigliano a questo: :dateExample.',
    'delimiter_help'         => 'Scegliere il delimitatore di campo che viene utilizzato in un file di input. Se non è sicuro, la virgola è l\'opzione più sicura.',
    'import_account_help'    => 'Se il file CSV NON contengono informazioni relative al tuo account asset(s), utilizzare questo elenco a discesa per selezionare l\'account di cui le transazioni del CSV di appartenenza.',
    'upload_not_writeable'   => 'Il grigio scatola contiene il percorso di un file. Dovrebbe essere scrivibile. Si prega di assicurarsi che sia.',

    // roles
    'column_roles_title'     => 'Definire ruoli colonna',
    'column_roles_text'      => '<p>Firefly III non può indovinare che cosa i dati di ogni colonna contiene. Si deve dire Firefly quali tipi di dati si aspettano. I dati di esempio in grado di guidarvi nella raccolta il tipo corretto dal menu a discesa. Se una colonna non può essere abbinata ad un utile tipo di dati, per favore fatemelo sapere <a href="https://github.com/JC5/firefly-iii/issues/new">by la creazione di un issue</a>.</p><p>Some valori nel file CSV, ad esempio nomi di account o categorie, possono già essere presenti nel Firefly III database. Se si seleziona "mappa questi valori" Firefly non tenterà di ricerca per la corrispondenza di valori in sé, ma consente l\'allineamento dei valori CSV contro i valori nel database. Questo permette di ottimizzare l\'importazione.</p>',
    'column_roles_table'     => 'Tabella',
    'column_name'            => 'Nome di colonna',
    'column_example'         => 'Colonna di dati di esempio',
    'column_role'            => 'Dati della colonna significato',
    'do_map_value'           => 'Una mappa di questi valori',
    'column'                 => 'Colonna',
    'no_example_data'        => 'Senza dati di esempio disponibile',
    'store_column_roles'     => 'Continuare a importare',
    'do_not_map'             => '(non sulla mappa)',
    'map_title'              => 'Collegare l\'importazione di dati a Firefly III dati',
    'map_text'               => 'Nelle tabelle seguenti, il valore a sinistra mostra le informazioni che si trovano nella tua caricato un file CSV. È vostro compito di mappare questo valore, se possibile, per un valore già presente nel database. Firefly aderiscono a questa associazione. Se non vi è alcun valore per la mappa, o non si desidera mappare il valore specifico, selezionare nulla.',

    'field_value'          => 'Valore del campo',
    'field_mapped_to'      => 'Mappato',
    'store_column_mapping' => 'Negozio mappatura',

    // map things.


    'column__ignore'                => '(ignorare questo articolo)',
    'column_account-iban'           => 'Patrimoniale conto (IBAN)',
    'column_account-id'             => 'Asset ID account (corrispondente Firefly)',
    'column_account-name'           => 'Asset account (nome)',
    'column_amount'                 => 'Quantità',
    'column_amount-comma-separated' => 'Importo (virgola come separatore decimale)',
    'column_bill-id'                => 'Bill ID (corrispondente Firefly)',
    'column_bill-name'              => 'Bill nome',
    'column_budget-id'              => 'Budget ID (corrispondente Firefly)',
    'column_budget-name'            => 'Budget nome',
    'column_category-id'            => 'L\'ID di categoria (corrispondente Firefly)',
    'column_category-name'          => 'Nome della categoria',
    'column_currency-code'          => 'Valuta (codice ISO 4217)',
    'column_currency-id'            => 'ID di valuta (corrispondente Firefly)',
    'column_currency-name'          => 'Nome della valuta (corrispondente Firefly)',
    'column_currency-symbol'        => 'Simbolo di valuta (corrispondente Firefly)',
    'column_date-interest'          => 'Calcolo degli interessi la data di',
    'column_date-book'              => 'Transazione data di prenotazione',
    'column_date-process'           => 'Processo di transazione data',
    'column_date-transaction'       => 'Data',
    'column_description'            => 'Description',
    'column_opposing-iban'          => 'Avversaria di conto (IBAN)',
    'column_opposing-id'            => 'Avversaria ID account (corrispondente Firefly)',
    'column_external-id'            => 'ID esterno',
    'column_opposing-name'          => 'Avversaria account (nome)',
    'column_rabo-debet-credit'      => 'Rabobank specifiche debet di credito/indicatore di',
    'column_ing-debet-credit'       => 'ING specifiche debet di credito/indicatore di',
    'column_sepa-ct-id'             => 'Bonifico SEPA end-to-end ID',
    'column_sepa-ct-op'             => 'SEPA Credit Transfer avversaria account',
    'column_sepa-db'                => 'SEPA Direct Debet',
    'column_tags-comma'             => 'Tag (separati da virgola)',
    'column_tags-space'             => 'Tag (separati da uno spazio)',
    'column_account-number'         => 'Conto patrimoniale (numero del conto)',
    'column_opposing-number'        => 'Avversaria conto (numero)',
];