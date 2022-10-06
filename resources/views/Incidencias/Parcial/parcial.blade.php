<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
<script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>


<style type="text/css" rel="stylesheet">
    /* body {
        height: 100vh;
        width: 100%;
        margin: 0;
        /* background: #bdbdc9; */
    }

    .parent {
        display: flex;
        align-items: center;
        justify-content: space-around;
        height: 100%;
    } */

    /* Select2-Bootstrap-style */


    .select2-container--bootstrap .select2-selection {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #555555;
        font-size: 14px;
        outline: 0;
    }

    .select2-container--bootstrap .select2-search--dropdown .select2-search__field {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        color: #555555;
        font-size: 14px;
    }

    .select2-container--bootstrap .select2-search__field {
        outline: 0;
    }

    .select2-container--bootstrap .select2-search__field::-webkit-input-placeholder {
        color: #999;
    }

    .select2-container--bootstrap .select2-search__field:-moz-placeholder {
        color: #999;
    }

    .select2-container--bootstrap .select2-search__field::-moz-placeholder {
        color: #999;
        opacity: 1;
    }

    .select2-container--bootstrap .select2-search__field:-ms-input-placeholder {
        color: #999;
    }

    .select2-container--bootstrap .select2-results__option {
        padding: 6px 12px;
    }

    .select2-container--bootstrap .select2-results__option[role=group] {
        padding: 0;
    }

    .select2-container--bootstrap .select2-results__option[aria-disabled=true] {
        color: #777777;
        cursor: not-allowed;
    }

    .select2-container--bootstrap .select2-results__option[aria-selected=true] {
        background-color: #f5f5f5;
        color: #262626;
    }

    .select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
        background-color: #337ab7;
        color: #fff;
    }

    .select2-container--bootstrap .select2-results__group {
        color: #777777;
        display: block;
        padding: 6px 12px;
        font-size: 12px;
        line-height: 1.42857143;
        white-space: nowrap;
    }

    .select2-container--bootstrap.select2-container--focus .select2-selection,
    .select2-container--bootstrap.select2-container--open .select2-selection {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
        -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
        border-color: #66afe9;
    }

    .select2-container--bootstrap.select2-container--open .select2-selection .select2-selection__arrow b {
        border-color: transparent transparent #999 transparent;
        border-width: 0 4px 4px 4px;
    }

    .select2-container--bootstrap.select2-container--open.select2-container--below .select2-selection {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        border-bottom-color: transparent;
    }

    .select2-container--bootstrap.select2-container--open.select2-container--above .select2-selection {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
        border-top-color: transparent;
    }

    .select2-container--bootstrap .select2-dropdown {
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
        border-color: #66afe9;
        overflow-x: hidden;
        margin-top: -1px;
    }

    .select2-container--bootstrap .select2-selection--single {
        height: 34px;
        line-height: 1.42857143;
        padding: 6px 24px 6px 12px;
    }
</style>
