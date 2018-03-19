$(document).ready(function() {
    "use strict";
    $('#home_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess");
                foo.attr("style", "display: block;");
                $("#home_form").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('#home_enquiry').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess_qe");
                foo.attr("style", "display: block;");
                $("#home_enquiry").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('#tbook_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess");
                foo.attr("style", "display: block;");
                $("#tbook_form").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('#hbook_form').on('submit', function(e) {
        var postdata = $(this).serializeArray();
        var formurl = $(this).attr("action");
        $.ajax({
            url: formurl,
            type: "POST",
            data: postdata,
            success: function(data) {
                var foo = $(".succ_mess");
                foo.attr("style", "display: block;");
                $("#hbook_form").closest('form').find("input[type=text],input[type=tel],input[type=number],input[type=email], textarea").val("");
            }
        });
        e.preventDefault();
        e.unbind();
    });
    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrainWidth: false, // Does not change width of dropdown to that of the activator
        hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
        belowOrigin: false, // Displays dropdown below the button
        alignment: 'left', // Displays dropdown with edge aligned to the left of button
        stopPropagation: false // Stops event propagation
    });

    //LEFT MOBILE MENU OPEN
    $(".mob-menu-icon").on('click', function() {
        $(".mob-menu-slide").css("right", "0");
        $(".btn-close-menu").css("display", "inline-block");
    });

    //LEFT MOBILE MENU CLOSE
    $(".btn-close-menu").on('click', function() {
        $(".mob-menu-slide").css("right", "-240px");
        $(".btn-close-menu").css("display", "none");
    });

    //GOOGLE MAP IFRAME
    $('.map-container').on('click', function() {
        $(this).find('iframe').addClass('clicked')
    }).on('mouseleave', function() {
        $(this).find('iframe').removeClass('clicked')
    });

    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });

    //MATERIALIZE SELECT DROPDOWN
    $('select').material_select();

    //AUTO COMPLETE CITY SELECT
    $('#select-city.autocomplete').autocomplete({
        data: {
            "New York": null,
            "California": null,
            "Illinois": null,
            "Texas": null,
            "Pennsylvania": null,
            "San Diego": null,
            "Los Angeles": null,
            "Dallas": null,
            "Austin": null,
            "Columbus": null,
            "Charlotte": null,
            "El Paso": null,
            "Portland": null,
            "Las Vegas": null,
            "Oklahoma City": null,
            "Milwaukee": null,
            "Tucson": null,
            "Sacramento": null,
            "Long Beach": null,
            "Oakland": null,
            "Arlington": null,
            "Tampa": null,
            "Corpus Christi": null,
            "Greensboro": null,
            "Jersey City": null
        },
        limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
        onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
        },
        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
    });

    $('#select-search.autocomplete').autocomplete({
        data: {
            "Top Honeymoon Packages in India": 'images/icon/7.png',
            "Family Package": 'images/icon/8.png',
            "World Tour Package": 'images/icon/9.png',
            "Hill Stations": 'images/icon/10.png',
            "America Holidays": 'images/icon/11.png',
            "Germany Holidays": 'images/icon/12.png',
            "Hong Kong Holidays": 'images/icon/13.png',
            "Europe Holidays": 'images/icon/14.png',
            "France Holidays": 'images/icon/15.png',
            "Switzerland,Bali,Thailand Package": 'images/icon/16.png',
            "Maldives,Malaysia,Pattaya Package": 'images/icon/17.png',
            "Dubai Packages": 'images/icon/18.png',
            "Europe Tour Packages": 'images/icon/19.png',
            "USA Tour Packages": 'images/icon/20.png',
            "Mexico City, Mexico": 'images/icon/21.png',
            "Seoul, South Korea": 'images/icon/22.png',
            "Ljubljana, Slovenia": 'images/icon/23.png',
            "Wroclaw, Poland": 'images/icon/24.png',
            "Nashville, USA": 'images/icon/25.png',
            "Amsterdam, the Netherlands": 'images/icon/26.png',
            "First World Hotel": 'images/icon/27.png',
            "MGM Grand Las Vegas Hotel": 'images/icon/28.png',
            "CityCenter": 'images/icon/29.png',
            "Holiday Hotel Inn": 'images/icon/13.png',
            "Tour and Travel Packages": 'images/icon/14.png',
            "City Seight Seeings": 'images/icon/15.png'
        },
        limit: 8, // The max amount of results that can be shown at once. Default: Infinity.
        onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
        },
        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
    });

});

function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

//DATE PICKER	
$(function() {
    var dateFormat = "mm/dd/yy",
        from = $("#from")
        .datepicker({
            defaultDate: "+1w",
            changeMonth: false,
            numberOfMonths: 1
        })
        .on("change", function() {
            to.datepicker("option", "minDate", getDate(this));
        }),
        to = $("#to").datepicker({
            defaultDate: "+1w",
            changeMonth: false,
            numberOfMonths: 1
        })
        .on("change", function() {
            from.datepicker("option", "maxDate", getDate(this));
        });

    function getDate(element) {
        var date;
        try {
            date = $.datepicker.parseDate(dateFormat, element.value);
        } catch (error) {
            date = null;
        }

        return date;
    }
});