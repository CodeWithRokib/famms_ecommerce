$(document).ready((function(){var t=$(".main-wrapper"),e=$(".page-wrapper"),a=$(".slimscroll");setTimeout((function(){$("#loader-wrapper"),setTimeout((function(){$("#loader-wrapper").hide()}),100)}),500);if($("#sidebar-menu a").on("click",(function(t){$(this).parent().hasClass("submenu")&&t.preventDefault(),$(this).hasClass("subdrop")?$(this).hasClass("subdrop")&&($(this).removeClass("subdrop"),$(this).next("ul").hide(350)):($("ul",$(this).parents("ul:first")).hide(350),$("a",$(this).parents("ul:first")).removeClass("subdrop"),$(this).next("ul").show(350),$(this).addClass("subdrop"))})),$("#sidebar-menu ul li.submenu a.active").parents("li:last").children("a:first").addClass("active").trigger("click"),$("#toggle-password").click((function(){$(this).toggleClass("fa-eye fa-eye-slash"),"password"==$("#password").attr("type")?$("#password").attr("type","text"):$("#password").attr("type","password")})),$("body").append('<div class="sidebar-overlay"></div>'),$(document).on("click","#mobile_btn",(function(){return t.toggleClass("slide-nav"),$(".sidebar-overlay").toggleClass("opened"),$("html").addClass("menu-opened"),$("#task_window").removeClass("opened"),!1})),$(".sidebar-overlay").on("click",(function(){$("html").removeClass("menu-opened"),$(this).removeClass("opened"),t.removeClass("slide-nav"),$(".sidebar-overlay").removeClass("opened"),$("#task_window").removeClass("opened")})),$(document).on("click","#task_chat",(function(){return $(".sidebar-overlay").toggleClass("opened"),$("#task_window").addClass("opened"),!1})),$(".select").length>0&&$(".select").select2({minimumResultsForSearch:-1,width:"100%"}),$(".modal").length>0){$(".modal").on("show.bs.modal",(function(t){var e=$(this),a=$(".modal:visible").not($(this));if(a.length)return a.modal("hide"),a.one("hidden.bs.modal",(function(t){e.modal("show")})),!1}))}if($(".floating").length>0&&$(".floating").on("focus blur",(function(t){$(this).parents(".form-focus").toggleClass("focused","focus"===t.type||this.value.length>0)})).trigger("blur"),$(".bookingrange").length>0){var n=moment().subtract(6,"days"),o=moment();function i(t,e){$(".bookingrange span").html(t.format("MMMM D, YYYY")+" - "+e.format("MMMM D, YYYY"))}$(".bookingrange").daterangepicker({startDate:n,endDate:o,ranges:{Today:[moment(),moment()],Yesterday:[moment().subtract(1,"days"),moment().subtract(1,"days")],"Last 7 Days":[moment().subtract(6,"days"),moment()],"Last 30 Days":[moment().subtract(29,"days"),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract(1,"month").startOf("month"),moment().subtract(1,"month").endOf("month")]}},i),i(n,o)}if(a.length>0){a.slimScroll({height:"auto",width:"100%",position:"right",size:"7px",color:"#ccc",wheelStep:10,touchScrollStep:100});var l=$(window).height()-60;a.height(l),$(".sidebar .slimScrollDiv").height(l),$(window).resize((function(){var t=$(window).height()-60;a.height(t),$(".sidebar .slimScrollDiv").height(t)}))}var s=$(window).height();e.css("min-height",s),$(window).resize((function(){var t=$(window).height();e.css("min-height",t)})),$(".datetimepicker").length>0&&$(".datetimepicker").datetimepicker({format:"YYYY-MM-DD",icons:{up:"fa fa-angle-up",down:"fa-solid fa-angle-down",next:"fa-solid fa-angle-right",previous:"fa-solid fa-angle-left"}}),$(".timepicker").length>0&&$(".timepicker").datetimepicker({format:"hh:mm:ss",icons:{up:"fa fa-angle-up",down:"fa-solid fa-angle-down",next:"fa-solid fa-angle-right",previous:"fa-solid fa-angle-left"}}),$(".datatable").length>0&&$(".datatable").DataTable({bFilter:!1}),$('[data-bs-toggle="tooltip"]').length>0&&$('[data-bs-toggle="tooltip"]').tooltip(),$(".clickable-row").length>0&&$(".clickable-row").click((function(){window.location=$(this).data("href")})),$(document).on("click","#check_all",(function(){return $(".checkmail").click(),!1})),$(".checkmail").length>0&&$(".checkmail").each((function(){$(this).on("click",(function(){$(this).closest("tr").hasClass("checked")?$(this).closest("tr").removeClass("checked"):$(this).closest("tr").addClass("checked")}))})),$(document).on("click",".mail-important",(function(){$(this).find("i.fa").toggleClass("fa-star").toggleClass("fa-star-o")})),$("#editor").length>0&&ClassicEditor.create(document.querySelector("#editor"),{toolbar:{items:["heading","|","fontfamily","fontsize","|","alignment","|","fontColor","fontBackgroundColor","|","bold","italic","strikethrough","underline","subscript","superscript","|","link","|","outdent","indent","|","bulletedList","numberedList","todoList","|","code","codeBlock","|","insertTable","|","uploadImage","blockQuote","|","undo","redo"],shouldNotGroupWhenFull:!0}}).then((t=>{window.editor=t})).catch((t=>{console.error(t.stack)})),$(document).on("click","#task_complete",(function(){return $(this).toggleClass("task-completed"),!1})),$("#customleave_select").length>0&&$("#customleave_select").multiselect(),$("#edit_customleave_select").length>0&&$("#edit_customleave_select").multiselect(),$(document).on("click",".leave-edit-btn",(function(){return $(this).removeClass("leave-edit-btn").addClass("btn btn-white leave-cancel-btn").text("Cancel"),$(this).closest("div.leave-right").append('<button class="btn btn-primary leave-save-btn" type="submit">Save</button>'),$(this).parent().parent().find("input").prop("disabled",!1),!1})),$(document).on("click",".leave-cancel-btn",(function(){return $(this).removeClass("btn btn-white leave-cancel-btn").addClass("leave-edit-btn").text("Edit"),$(this).closest("div.leave-right").find(".leave-save-btn").remove(),$(this).parent().parent().find("input").prop("disabled",!0),!1})),$(document).on("change",".leave-box .onoffswitch-checkbox",(function(){var t=$(this).attr("id").split("_")[1];1==$(this).prop("checked")?($("#leave_"+t+" .leave-edit-btn").prop("disabled",!1),$("#leave_"+t+" .leave-action .btn").prop("disabled",!1)):($("#leave_"+t+" .leave-action .btn").prop("disabled",!0),$("#leave_"+t+" .leave-cancel-btn").parent().parent().find("input").prop("disabled",!0),$("#leave_"+t+" .leave-cancel-btn").closest("div.leave-right").find(".leave-save-btn").remove(),$("#leave_"+t+" .leave-cancel-btn").removeClass("btn btn-white leave-cancel-btn").addClass("leave-edit-btn").text("Edit"),$("#leave_"+t+" .leave-edit-btn").prop("disabled",!0))})),$(".leave-box .onoffswitch-checkbox").each((function(){var t=$(this).attr("id").split("_")[1];1==$(this).prop("checked")?($("#leave_"+t+" .leave-edit-btn").prop("disabled",!1),$("#leave_"+t+" .leave-action .btn").prop("disabled",!1)):($("#leave_"+t+" .leave-action .btn").prop("disabled",!0),$("#leave_"+t+" .leave-cancel-btn").parent().parent().find("input").prop("disabled",!0),$("#leave_"+t+" .leave-cancel-btn").closest("div.leave-right").find(".leave-save-btn").remove(),$("#leave_"+t+" .leave-cancel-btn").removeClass("btn btn-white leave-cancel-btn").addClass("leave-edit-btn").text("Edit"),$("#leave_"+t+" .leave-edit-btn").prop("disabled",!0))})),$(".otp-input, .zipcode-input input, .noborder-input input").length>0&&$(".otp-input, .zipcode-input input, .noborder-input input").focus((function(){$(this).data("placeholder",$(this).attr("placeholder")).attr("placeholder","")})).blur((function(){$(this).attr("placeholder",$(this).data("placeholder"))})),$(".otp-input").length>0&&$(".otp-input").keyup((function(t){t.which>=48&&t.which<=57||t.which>=96&&t.which<=105?$(t.target).next(".otp-input").focus():8==t.which&&$(t.target).prev(".otp-input").focus()})),$(document).on("click","#toggle_btn",(function(){return $("body").hasClass("mini-sidebar")?($("body").removeClass("mini-sidebar"),$(".subdrop + ul").show()):($("body").addClass("mini-sidebar"),$(".subdrop + ul").hide()),!1})),$(document).on("mouseover",(function(t){if(t.stopPropagation(),$("body").hasClass("mini-sidebar")&&$("#toggle_btn").is(":visible"))return $(t.target).closest(".sidebar").length?($("body").addClass("expand-menu"),$(".subdrop + ul").show()):($("body").removeClass("expand-menu"),$(".subdrop + ul").hide()),!1})),$(document).on("click",".top-nav-search .responsive-search",(function(){$(".top-nav-search").toggleClass("active")})),$(document).on("click","#file_sidebar_toggle",(function(){$(".file-wrap").toggleClass("file-sidebar-toggle")})),$(document).on("click","#file_sidebar_toggle",(function(){$(".file-wrap").toggleClass("file-sidebar-toggle")})),$(document).on("click",".list-inline-item .submenu a",(function(){$(".hidden-links").addClass("hidden")})),$(document).on("click",".two-col-bar .sub-menu a",(function(){$(".two-col-bar .sub-menu ul").toggle(500)})),$(document).on("click",".sidebar-horizantal .viewmoremenu",(function(){$(".sidebar-horizantal .list-inline-item .submenu ul").hide(500),$(".sidebar-horizantal .list-inline-item .submenu a").removeClass("subdrop")})),$(".kanban-wrap").length>0&&$(".kanban-wrap").sortable({connectWith:".kanban-wrap",handle:".kanban-box",placeholder:"drag-placeholder"}),$(window).width()<991&&$("html").each((function(){var t=$.map(this.attributes,(function(t){return t.name})),e=$(this);$.each(t,(function(t,a){e.removeAttr(a)}))})),$(document).ready((function(){$("#sidebar-size-compact").click((function(){$("html").attr("data-layout","vertical")}))})),$(document).ready((function(){$("#sidebar-size-small-hover").click((function(){$("html").attr("data-layout","vertical")}))})),$(document).ready((function(){$("[data-layout=horizontal] #sidebar-size-compact").click((function(){$("html").attr("data-layout","vertical")}))})),$(document).ready((function(){$("[data-layout=horizontal] #sidebar-size-small-hover").click((function(){$("html").attr("data-layout","vertical")}))})),$(document).ready((function(){$(".colorscheme-cardradio input[type=radio]").click((function(){$("html").removeAttr("data-topbar")})),$(".viewmoremenu").click((function(){$(".hidden-links").toggleClass("hidden")}))})),$("[data-sidebar-size=sm-hover] #customizer-layout03").click((function(){$("html").removeAttr("data-layout-mode")})),$(".greedy .list-inline-item .submenu a").click((function(){$(".hidden-links").addClass("hidden")})),$("#addProduct").on("click",(function(t){var e=`<tr><td>${$("#addTable tbody").find("tr").length+1}</td><td><input class="form-control" type="text" style="min-width:150px"></td>\n\t  \t<td><input class="form-control" type="text" style="min-width:150px"></td>\n\t\t<td><input class="form-control" style="width:100px" type="text"></td>\n\t\t<td><input class="form-control" style="width:80px" type="text"></td>\n\t\t<td><input class="form-control" readonly style="width:120px" type="text"></td>\n\t\t<td><a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash"></i></a></td></tr>`;$("tbody.tbodyone").append(e),t.preventDefault()})),$("#addEditProduct").on("click",(function(t){var e=`<tr><td>${$("#editTable tbody").find("tr").length+1}</td>\n\t<td>\n\t\t<input class="form-control" type="text" value="Vehicle Module" style="min-width:150px">\n\t</td>\n\t<td>\n\t\t<input class="form-control" type="text" value="Create, edit delete functionlity" style="min-width:150px">\n\t</td>\n\t<td>\n\t\t<input class="form-control" style="width:100px" type="text" value="112">\n\t</td>\n\t<td>\n\t\t<input class="form-control" style="width:80px" type="text" value="1">\n\t</td>\n\t<td>\n\t\t<input class="form-control" readonly style="width:120px" type="text" value="112">\n\t</td>\n\t<td>\n\t\t<a href="javascript:void(0)" class="text-danger font-18 remove" title="Remove"><i class="fa fa-trash"></i></a>\n\t</td></tr>`;$("tbody.tbodyone").append(e),t.preventDefault()})),$(document).on("click",".remove",(function(){$(this).parents("tr").remove();$("#addTable tbody").find("tr").length}))}));