{{$register = Package.Raxon.Deno:Init:register()}}
{{if(!is.empty($register))}}
{{Package.Raxon.Deno:Import:role.system()}}
{{Package.Raxon.Deno:Main:deno.install()}}
{{/if}}