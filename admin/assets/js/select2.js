var Select2= {
    init:function() {
        $("#m_select2_1").select2( {
            placeholder: "Select",allowClear:!0
        }
        ),
        $("#m_select2_2").select2( {
            placeholder: "Select",allowClear:!0
        }
        ),
        $("#m_select2_3").select2( {
            placeholder: "Select",allowClear:!0
        }
        ),
        $("#m_select2_4").select2( {
            placeholder: "Select",allowClear:!0
        }
        ),
        $("#m_select2_5").select2( {
            placeholder:"Select",allowClear:!0
        }
        ),
        $("#m_select2_6").select2( {
            placeholder:"Select",allowClear:!0
        }
        ),
        $("#m_select2_12_1, #m_select2_12_2, #m_select2_12_3, #m_select2_12_4").select2( {
            placeholder: "Select"
        }
        ),
        $("#m_select2_7").select2( {
            placeholder: "Select",allowClear:!0
        }
        ),
        $("#m_select2_8").select2( {
            placeholder: "Select",allowClear:!0
        }
        ),
        $("#m_select2_9").select2( {
            placeholder: "Select", maximumSelectionLength: 2
        }
        ),
        $("#m_select2_10").select2( {
            placeholder: "", minimumResultsForSearch: 1/0
        }
        ),
        $("#m_select2_11").select2( {
            placeholder: "Select", tags: !0
        }
        ),
        $(".m-select2-general").select2( {
            placeholder: "Select"
        }
        ),
        $("#m_select2_modal").on("shown.bs.modal", function() {
            $("#m_select2_1_modal").select2( {
                placeholder: "Select"
            }
            ), $("#m_select2_2_modal").select2( {
                placeholder: "Select"
            }
            ), $("#m_select2_3_modal").select2( {
                placeholder: "Select"
            }
            ), $("#m_select2_4_modal").select2( {
                placeholder: "Select", allowClear: !0
            }
            )
        }
        )
    }
}

;
jQuery(document).ready(function() {
    Select2.init()
}

);