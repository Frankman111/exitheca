function confirm_delete(what, name, model, id){

    let question = "Wollen Sie " + what + "\n"+
    + name + "\n" + " wirklich löschen?";

    if (confirm(question)){

        let form_action = "/" + model + "/" + id;
        $('#delete_form').attr('action', form_action).submit();

    }

}
