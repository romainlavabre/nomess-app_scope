# Application scope variable

For integrate to nomess:

> config/container.yaml <br>
> components : <br>
> nomess/app_scope: 'Nomess\Component\ApplicationScope\NomessInstaller'  

> config/cache.yaml <br>

<code> 
application_scope: <br>
&nbsp&nbsp&nbsp&nbsp        enable: true <br>
&nbsp&nbsp&nbsp&nbsp       parameters: <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp            value: <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp type: array <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp            filename: <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp default: app_scope
 <br>
&nbsp&nbsp&nbsp&nbsp        revalidation_rules: [] <br>
&nbsp&nbsp&nbsp&nbsp        removed_by_cli: false <br>
&nbsp&nbsp&nbsp&nbsp        return: array <br>
</code>
