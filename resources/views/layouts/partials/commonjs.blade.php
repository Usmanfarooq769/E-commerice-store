<!-- Scroll To Top -->
<div class="scrollToTop">
    <span class="arrow"><i class="ri-arrow-up-s-fill fs-20"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->
<!-- Popper JS -->
<script src="{{ asset('assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Default Menu JS -->
<script src="{{ asset('assets/js/defaultmenu.js') }}"></script>
<!-- Node Waves JS -->
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
<!-- Sticky JS -->
<script src="{{ asset('assets/js/sticky.js') }}"></script>
<!-- Simplebar JS -->
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/simplebar.js') }}"></script>
<!-- Auto Complete JS -->
<script src="{{ asset('assets/libs/@tarekraafat/autocomplete.js/autoComplete.min.js') }}"></script>

<!-- Color Picker JS -->
<script src="{{ asset('assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

<!-- Jquery Cdn -->


<script src="{{ asset('assets/js/custom-switcher.js')}}"></script>
<!-- Load Bootstrap Bundle -->

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Internal Select-2.js -->
<script src="{{asset('assets/js/select2.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/moment/min/moment.min.js"></script>


<!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> -->
<!-- Tempus Dominus JS -->
<script src="https://cdn.jsdelivr.net/npm/@eonasdan/tempus-dominus@6.2.7/dist/js/tempus-dominus.min.js"></script>
<script src="{{ asset('assets/libs/quill/quill.js') }}"></script>
<!-- FilePond Plugins -->
<script src="{{ asset('assets/libs/filepond/filepond.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
<script
    src="{{ asset('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
<script
    src="{{ asset('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js') }}"></script>
<script
    src="{{ asset('assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js') }}"></script>
<script
    src="{{ asset('assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js') }}"></script>

<!-- Internal Scripts -->
<script src="{{ asset('assets/js/edit-products.js') }}"></script>

<!-- Core Libraries -->

<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

<script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
<!-- Main Theme Js -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<!--  Load Moment Timezone -->
<script src="https://momentjs.com/downloads/moment-timezone-with-data.js"></script>
<!-- sweet alert -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Date Range Picker -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/date&time_pickers.js') }}"></script>


<!-- Datatables Cdn -->

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>





<!-- Internal Datatables JS -->
<!-- <script src="{{ asset('assets/js/date&time_pickers.js') }}"></script> -->



<script>
    document.addEventListener("DOMContentLoaded", function () {
       
        flatpickr("#date_out", {});

        // flatpickr("#date_out", {});
        // flatpickr("#date_out", {});
        // flatpickr("#date_out", {});
        // flatpickr("#date_out", {});
        
       
    

    });
</script>





<script>
    document.addEventListener("DOMContentLoaded", function () {

        //  Convert Bootstrap 4 button classes to Bootstrap 5
        const buttonClassMap = {
            "btn-xs": "btn-sm",
            "btn-block": "d-block w-100",
            "btn-group-toggle": "btn-group"
        };

        Object.keys(buttonClassMap).forEach(oldClass => {
            document.querySelectorAll("." + oldClass).forEach(el => {
                el.classList.remove(oldClass);
                el.classList.add(buttonClassMap[oldClass]);
            });
        });

        // Apply "custom-card" to all .card elements globally
        function applyCustomCardClass() {
            document.querySelectorAll(".card:not(.custom-card)").forEach(card => {
                card.classList.add("custom-card");
            });
        }
        applyCustomCardClass();

        // Convert Bootstrap 4 attributes to Bootstrap 5
        document.querySelectorAll('[data-toggle]').forEach(el => {
            el.setAttribute("data-bs-toggle", el.getAttribute("data-toggle"));
            el.removeAttribute("data-toggle");
        });

        document.querySelectorAll('[data-dismiss]').forEach(el => {
            el.setAttribute("data-bs-dismiss", el.getAttribute("data-dismiss"));
            el.removeAttribute("data-dismiss");
        });

        //  Convert Bootstrap 4 class names to Bootstrap 5
        const classMap = {
            // Form-related classes
            "form-group": "mb-3",
            "control-label": "col-form-label",
            "input-group-append": "input-group-text",
            "input-group-prepend": "input-group-text",
            "custom-file": "mb-3", // No longer needed in Bootstrap 5
            "custom-file-input": "form-control",
            "custom-file-label": "form-label",
            "float-right": "float-end",
            // Float and alignment classes
            "float-left": "float-start",
            "float-right": "float-end",
            "text-left": "text-start",
            "text-right": "text-end",

            // Margin and padding classes
            "ml-auto": "ms-auto",
            "mr-auto": "me-auto",
            "pl-": "ps-",
            "pr-": "pe-",

            // Card and grid-related classes
            "card-deck": "row",
            "card-columns": "row",
            // them design 

            "badge-success": "bg-success",
            "badge-danger": " bg-danger",
            "badge-warning": "bg-warning",
            //  "btn-info" : "btn-info-light",


        };

        Object.keys(classMap).forEach(oldClass => {
            document.querySelectorAll("." + oldClass).forEach(el => {
                el.classList.remove(oldClass);
                el.classList.add(classMap[oldClass]);
            });
        });

        // Fix File Upload Inputs
        document.querySelectorAll("input[type='file']").forEach(fileInput => {
            fileInput.classList.remove("custom-file-input"); // Remove Bootstrap 4 class
            fileInput.classList.add("form-control"); // Add Bootstrap 5 class
            const parent = fileInput.closest(".custom-file");
            if (parent) {
                parent.classList.remove("custom-file"); // Remove parent wrapper
                parent.classList.add("mb-3"); // Add Bootstrap 5 margin class
            }
            const label = fileInput.nextElementSibling;
            if (label && label.tagName === "LABEL") {
                label.classList.remove("custom-file-label"); // Remove Bootstrap 4 class
                label.classList.add("form-label"); // Add Bootstrap 5 class
            }
        });
        document.querySelectorAll('.dropdown-toggle').forEach(dropdown => {
            new bootstrap.Dropdown(dropdown);
        });

        //  Global Fix for Card Collapse
        document.querySelectorAll("[data-card-widget='collapse']").forEach(button => {
            button.addEventListener("click", function () {
                let card = button.closest(".card");
                let cardBody = card.querySelector(".card-body");
                let cardFooter = card.querySelector(".card-footer");
                let icon = button.querySelector("i");

                if (card.classList.contains("collapsed-card")) {
                    card.classList.remove("collapsed-card");
                    cardBody.style.display = "block";
                    if (cardFooter) cardFooter.style.display = "block";
                    icon.classList.remove("fa-plus");
                    icon.classList.add("fa-minus");
                } else {
                    card.classList.add("collapsed-card");
                    cardBody.style.display = "none";
                    if (cardFooter) cardFooter.style.display = "none";
                    icon.classList.remove("fa-minus");
                    icon.classList.add("fa-plus");
                }
            });
        });


        //  Fix Tooltips and Popovers
        document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(tooltip => {
            new bootstrap.Tooltip(tooltip);
        });

        document.querySelectorAll('[data-bs-toggle="popover"]').forEach(popover => {
            new bootstrap.Popover(popover);
        });


    });

</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll("label").forEach(label => {
            label.classList.add("fw-semibold");
        });
        //  Replace existing `btn-default` with `btn-secondary`
        function replaceBtnDefault() {
            document.querySelectorAll(".btn-default").forEach(button => {
                button.classList.remove("btn-default");
                button.classList.add("btn-light");
            });
        }

        // Run the replacement on page load
        replaceBtnDefault();

        // Observe for dynamically added elements
        const observer = new MutationObserver(() => {
            replaceBtnDefault();
        });

        observer.observe(document.body, { childList: true, subtree: true });


    });



</script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        flatpickr("#dob", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#dobdate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#endDate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        flatpickr("#attendenceCorrect", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#startDate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#joiningdate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });
        flatpickr("#effective_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        flatpickr("#filter_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });







        flatpickr("#date1221", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#reminder", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#timetrackerdate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        

        flatpickr("#applied_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#srchmonth", {
            dateFormat: "Y-m",
            allowInput: true,
            altInput: true,
            altFormat: "F , Y",
        });


        flatpickr("#pending_invoice_report", {
            dateFormat: "Y-m",
            allowInput: true,
            altInput: true,
            altFormat: "F , Y",
        });

      







        flatpickr("#document_expiry_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#paidtrainingdate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        flatpickr("#shiftingsalarydate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });
        flatpickr("#enddate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        flatpickr("#date", {
            dateFormat: "Y-m",
            allowInput: true,
            altInput: true,
            altFormat: "F , Y",
        });


        flatpickr("#invoice-start", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#editdated", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        flatpickr("#dated", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        flatpickr("#edit_required_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#duedate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#issue_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#startdate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#datetimepicker1", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });



        flatpickr("#maturity_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#add-journal", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#cash-receipt-vocher", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#bank-receipt-voucher", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });
        flatpickr("#bank-payment-vocher", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#receivable-vocher", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });
        flatpickr("#payable-voucher", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#fulledit_dated", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        flatpickr("#edit_withdraw_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#chequeissuedate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        flatpickr("#chequeencashmentdate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#startingdate", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#datetime", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#edit_recording_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#recording_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#invoice_paid_date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#upload-bpo-leads", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });


        flatpickr("#edit-invoice-date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
            autoclose: true,
            todayHighlight: true,
        });

        flatpickr("#pacific-date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#cashPayment", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#rejoin-date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

        flatpickr("#ondord-completion-date", {
            dateFormat: "Y-m-d",
            allowInput: true,
            altInput: true,
            altFormat: "F j, Y",
        });

      
        

        flatpickr("#on-bord-issue-date", {});
        flatpickr("#on-bord-start-joing", {});
        flatpickr("#ondord-completion2", {});
        flatpickr("#date_issue", {});
        flatpickr("#training_date", {});
        flatpickr("#assessment-date", {});
        flatpickr("#assessment-traning-start-date", {});
        flatpickr("#assessment-traning-end-date", {});
        flatpickr("#assessment-supervisor-date", {});
        flatpickr("#assessment-hr-date", {});
        flatpickr("#employee-conformantion-confirmationDate", {});
        flatpickr("#termination-final-day", {});
        flatpickr("#termination-termination-date", {});
        flatpickr("#warning-letter-incident-date", {});
        flatpickr("#verbal_warning_date", {});
        flatpickr("#warning-letter-meeting_date", {});
        flatpickr("#warning-letter-verbal-warning-date", {});
        flatpickr("#writtenWarningDate", {});
        flatpickr("#experience-start-date", {});
        flatpickr("#experience-letter-end-date", {});
        flatpickr("#exit-clearance-hr-date", {});
        flatpickr("#exit-clearance-final-date", {});
        flatpickr("#exit-clearance-employee-date", {});
        flatpickr("#exit-clearance-last-working-date", {});
        flatpickr("#non-confirm-letter-date", {});
        flatpickr("#retention-probation-end", {});
        flatpickr("#retention-status-update-date", {});
        flatpickr("#retention-manager-date", {});
        flatpickr("#retention-hr-date", {});
        flatpickr("#retention-effect-Date", {});
        flatpickr("#suspension-letter-end-date", {});
        flatpickr("#suspension-letter-review-date", {});
        flatpickr("#show-cause-notice-incident-date", {});
        flatpickr("#probation-assessment-probation_end_date", {});
        flatpickr("#initial_meeting", {});
        flatpickr("#review_date", {});
        flatpickr("#probation-assessment-review_date", {});
        flatpickr("#probation-assessment-new_probation_end", {});
        flatpickr("#agremment-effective-date", {});
        flatpickr("#promotion-lette-hr-date", {});
        flatpickr("#promotion-letter-employee_ack_date", {});
        flatpickr("#promotion-letter-date", {});


         flatpickr("#promotion-letter-effective_date", {});
      
        // flatpickr("#promotion-letter-employee_ack_date", {});
        // flatpickr("#promotion-letter-date", {});














    });
</script>

<!-- date and times  -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        (function () {
            "use strict";






            flatpickr("#meeting_datetime", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

            flatpickr("#limitdatetime", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

            flatpickr("#input-date", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

            flatpickr("#demo_datetime", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });


            flatpickr("#add-status-interviewdate", {
                enableTime: true,
                dateFormat: "m/d/Y h:i K",
            });




            flatpickr("#datetimepicker2", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

            flatpickr("#datetimepicker3", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

            flatpickr("#datetimepicker4", {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });



        })();
    });
</script>