

function configureDropDownLists(org_name,submitter_name) {
    var org = new Array('Submitter 1', 'Submitter 2');

    switch (naziv.value) {
        case 'org':
            document.getElementById(submitter_name).options.length = 1;
            for (i = 0; i < org.length; i++) {
                createOption(document.getElementById(submitter_name), org[i], org[i]);
            }
            break;
        default:
            document.getElementById(submitter_name).options.length = 1;
            break;
    }

    createOption(document.getElementById(submitter_name), 'Other', 'Other');
        if (org_name.value === 'empty') {
            document.getElementById(submitter_name).options.length = 1;
    }
}


function createOption(ddl, text, value) {
    var opt = document.createElement('option');
    opt.value = value;
    opt.text = text;
    ddl.options.add(opt);
}