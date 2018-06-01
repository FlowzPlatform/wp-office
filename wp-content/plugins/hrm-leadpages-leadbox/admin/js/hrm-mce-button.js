(function() {
   tinymce.create('tinymce.plugins.hrm_optin_2_step', {
      init : function(ed, url) {
         ed.addButton('hrm_optin_2_step', {
            title : 'Add Leadbox',
            image : url+'/img/leadbox_icon.svg',
            onclick : function() {
               // var href = prompt("Leadbox href", "#");
               // var text = prompt("Call To Action Text", "link text/info");
               ed.selection.setContent('[hrm_optin_2_step href="#"]' + ed.selection.getContent() + '[/hrm_optin_2_step]');
            }
         });
      },
      createControl : function(n, cm) {
         return null;
      },
      getInfo : function() {
         return {
            longname : "Recent href",
            author : 'Henry Reith',
            authorurl : 'http://www.henryreith.co',
            infourl : '',
            version : "1.0"
         };
      }
   });
   tinymce.PluginManager.add('hrm_optin_2_step', tinymce.plugins.hrm_optin_2_step);
})();