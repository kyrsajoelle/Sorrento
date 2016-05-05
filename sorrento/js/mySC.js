(function() {
   tinymce.create('tinymce.plugins.recentposts', {
      init : function(ed, url) {
         ed.addButton('tabber', {
            title : 'Recent posts',
            image : url+'/sc.png',
            onclick : function() {
					selected = tinyMCE.activeEditor.selection.getContent();
                    ed.execCommand('mceInsertContent', false, '[tabber]'+selected+'[/tabber]');
            }
         });
      },
      createControl : function(n, cm) {
         return null;
      },
      getInfo : function() {
         return {
            longname : "Recent Posts",
            author : 'Konstantinos Kouratoras',
            authorurl : 'http://www.kouratoras.gr',
            infourl : 'http://wp.smashingmagazine.com',
            version : "1.0"
         };
      }
   });
   tinymce.PluginManager.add('tabber', tinymce.plugins.recentposts);
})();