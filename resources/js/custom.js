function confirm_delete (what, name, model, id){

    var question = "Wollen Sie " +what+ "\n" +name+"\n"+"wirklich löschen?";

    if (confirm(question)){

        var form_action  = "/" + model + "/" + id;

        $('#delete_form').attr('action', form_action).submit();

    }

}
