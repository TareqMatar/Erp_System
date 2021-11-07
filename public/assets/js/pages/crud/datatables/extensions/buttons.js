"use strict";
var KTDatatablesExtensionButtons = function() {

	var initTable1 = function() {

		// begin first table
		var table = $('#kt_datatable1').DataTable({
            responsive: true,

            buttons: [
                'print',
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
            ],
            processing: true,
            headerCallback: function(thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = `
                    <label class="checkbox checkbox-single">
                        <input type="checkbox" value="" class="group-checkable"/>
                        <span></span>
                    </label>`;
            },
            columnDefs: [
                {
                    targets: 0,
                    width: '30px',
                    className: 'dt-right',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return `
                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable"/>
                            <span></span>
                        </label>`;
                    },
                },
                // {
                //     width: '75px',
                //     targets: 5,
                //     render: function(data, type, full, meta) {
                //         var status = {
                //             1: {'title': 'فعــال', 'class': 'label-light-primary'},
                //             2: {'title': 'Delivered', 'class': ' label-light-danger'},
                //             3: {'title': 'غيـر فعــال', 'class': ' label-light-primary'},
                //             4: {'title': 'Success', 'class': ' label-light-success'},
                //             5: {'title': 'Info', 'class': ' label-light-info'},
                //             6: {'title': 'Danger', 'class': ' label-light-danger'},
                //             7: {'title': 'Warning', 'class': ' label-light-warning'},
                //         };
                //         if (typeof status[data] === 'undefined') {
                //             return data;
                //         }
                //         return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                //     },
                // },
                // {
                //     width: '75px',
                //     targets: 6,
                //     render: function(data, type, full, meta) {
                //         var status = {
                //             1: {'title': 'Online', 'state': 'danger'},
                //             2: {'title': 'Retail', 'state': 'primary'},
                //             3: {'title': 'Direct', 'state': 'success'},
                //         };
                //         if (typeof status[data] === 'undefined') {
                //             return data;
                //         }
                //         return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
                //             '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
                //     },
                // },
            ],

        });

        $('#export_print').on('click', function(e) {
            e.preventDefault();
            table.button(0).trigger();
        });

        $('#export_copy').on('click', function(e) {
            e.preventDefault();
            table.button(1).trigger();
        });

        $('#export_excel').on('click', function(e) {
            e.preventDefault();
            table.button(2).trigger();
        });

        $('#export_csv').on('click', function(e) {
            e.preventDefault();
            table.button(3).trigger();
        });

        $('#export_pdf').on('click', function(e) {
            e.preventDefault();
            table.button(4).trigger();
        });
        table.on('change', '.group-checkable', function() {
            var set = $(this).closest('table').find('td:first-child .checkable');
            var checked = $(this).is(':checked');

            $(set).each(function() {
                if (checked) {
                    $(this).prop('checked', true);
                    $(this).closest('tr').addClass('active');
                }
                else {
                    $(this).prop('checked', false);
                    $(this).closest('tr').removeClass('active');
                }
            });
        });

        table.on('change', 'tbody tr .checkbox', function() {
            $(this).parents('tr').toggleClass('active');
        });
	};

	var initTable2 = function() {

		// begin first table
		var table = $('#kt_datatable2').DataTable({
			responsive: true,

			buttons: [
				'print',
				'copyHtml5',
				'excelHtml5',
				'csvHtml5',
				'pdfHtml5',
			],
			processing: true,
            headerCallback: function(thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = `
                    <label class="checkbox checkbox-single">
                        <input type="checkbox" value="" class="group-checkable"/>
                        <span></span>
                    </label>`;
            },
            columnDefs: [
                {
                    targets: 0,
                    width: '30px',
                    className: 'dt-right',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return `
                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable"/>
                            <span></span>
                        </label>`;
                    },
                },
                // {
                //     width: '75px',
                //     targets: 5,
                //     render: function(data, type, full, meta) {
                //         var status = {
                //             1: {'title': 'فعــال', 'class': 'label-light-primary'},
                //             2: {'title': 'Delivered', 'class': ' label-light-danger'},
                //             3: {'title': 'غيـر فعــال', 'class': ' label-light-primary'},
                //             4: {'title': 'Success', 'class': ' label-light-success'},
                //             5: {'title': 'Info', 'class': ' label-light-info'},
                //             6: {'title': 'Danger', 'class': ' label-light-danger'},
                //             7: {'title': 'Warning', 'class': ' label-light-warning'},
                //         };
                //         if (typeof status[data] === 'undefined') {
                //             return data;
                //         }
                //         return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                //     },
                // },
                // {
                //     width: '75px',
                //     targets: 6,
                //     render: function(data, type, full, meta) {
                //         var status = {
                //             1: {'title': 'Online', 'state': 'danger'},
                //             2: {'title': 'Retail', 'state': 'primary'},
                //             3: {'title': 'Direct', 'state': 'success'},
                //         };
                //         if (typeof status[data] === 'undefined') {
                //             return data;
                //         }
                //         return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
                //             '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
                //     },
                // },
            ],

		});

		$('#export_print').on('click', function(e) {
			e.preventDefault();
			table.button(0).trigger();
		});

		$('#export_copy').on('click', function(e) {
			e.preventDefault();
			table.button(1).trigger();
		});

		$('#export_excel').on('click', function(e) {
			e.preventDefault();
			table.button(2).trigger();
		});

		$('#export_csv').on('click', function(e) {
			e.preventDefault();
			table.button(3).trigger();
		});

		$('#export_pdf').on('click', function(e) {
			e.preventDefault();
			table.button(4).trigger();
		});
        table.on('change', '.group-checkable', function() {
            var set = $(this).closest('table').find('td:first-child .checkable');
            var checked = $(this).is(':checked');

            $(set).each(function() {
                if (checked) {
                    $(this).prop('checked', true);
                    $(this).closest('tr').addClass('active');
                }
                else {
                    $(this).prop('checked', false);
                    $(this).closest('tr').removeClass('active');
                }
            });
        });

        table.on('change', 'tbody tr .checkbox', function() {
            $(this).parents('tr').toggleClass('active');
        });
	};

    var initTable3 = function() {

        // begin first table
        var table = $('#kt_datatable3').DataTable({
            responsive: true,

            buttons: [
                'print',
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5',
            ],
            processing: true,
            headerCallback: function(thead, data, start, end, display) {
                thead.getElementsByTagName('th')[0].innerHTML = `
                    <label class="checkbox checkbox-single">
                        <input type="checkbox" value="" class="group-checkable"/>
                        <span></span>
                    </label>`;
            },
            columnDefs: [
                {
                    targets: 0,
                    width: '30px',
                    className: 'dt-right',
                    orderable: false,
                    render: function(data, type, full, meta) {
                        return `
                        <label class="checkbox checkbox-single">
                            <input type="checkbox" value="" class="checkable"/>
                            <span></span>
                        </label>`;
                    },
                },
                // {
                //     width: '75px',
                //     targets: 5,
                //     render: function(data, type, full, meta) {
                //         var status = {
                //             1: {'title': 'فعــال', 'class': 'label-light-primary'},
                //             2: {'title': 'Delivered', 'class': ' label-light-danger'},
                //             3: {'title': 'غيـر فعــال', 'class': ' label-light-primary'},
                //             4: {'title': 'Success', 'class': ' label-light-success'},
                //             5: {'title': 'Info', 'class': ' label-light-info'},
                //             6: {'title': 'Danger', 'class': ' label-light-danger'},
                //             7: {'title': 'Warning', 'class': ' label-light-warning'},
                //         };
                //         if (typeof status[data] === 'undefined') {
                //             return data;
                //         }
                //         return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                //     },
                // },
                // {
                //     width: '75px',
                //     targets: 6,
                //     render: function(data, type, full, meta) {
                //         var status = {
                //             1: {'title': 'Online', 'state': 'danger'},
                //             2: {'title': 'Retail', 'state': 'primary'},
                //             3: {'title': 'Direct', 'state': 'success'},
                //         };
                //         if (typeof status[data] === 'undefined') {
                //             return data;
                //         }
                //         return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
                //             '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
                //     },
                // },
            ],

        });

        $('#export_print').on('click', function(e) {
            e.preventDefault();
            table.button(0).trigger();
        });

        $('#export_copy').on('click', function(e) {
            e.preventDefault();
            table.button(1).trigger();
        });

        $('#export_excel').on('click', function(e) {
            e.preventDefault();
            table.button(2).trigger();
        });

        $('#export_csv').on('click', function(e) {
            e.preventDefault();
            table.button(3).trigger();
        });

        $('#export_pdf').on('click', function(e) {
            e.preventDefault();
            table.button(4).trigger();
        });
        table.on('change', '.group-checkable', function() {
            var set = $(this).closest('table').find('td:first-child .checkable');
            var checked = $(this).is(':checked');

            $(set).each(function() {
                if (checked) {
                    $(this).prop('checked', true);
                    $(this).closest('tr').addClass('active');
                }
                else {
                    $(this).prop('checked', false);
                    $(this).closest('tr').removeClass('active');
                }
            });
        });

        table.on('change', 'tbody tr .checkbox', function() {
            $(this).parents('tr').toggleClass('active');
        });
    };

	return {

		//main function to initiate the module
		init: function() {
			initTable1();
			initTable2();
            initTable3();
		},

	};

}();

jQuery(document).ready(function() {
	KTDatatablesExtensionButtons.init();
});
