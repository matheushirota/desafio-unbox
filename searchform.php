<form role="search" action="<?=esc_url(home_url('/'));?>" method="GET" id="searchform" class="searchform" >
    <input type="text" name="first_term" id="first_term" placeholder="Digite aqui o primeiro termo">
    <select name="search_options">
        <option value="E">E</option>
        <option value="OU">OU</option>
    </select>
    <input type="text" name="second_term" id="second_term" placeholder="Digite aqui o segundo termo">
    <input type="submit" id="submit_buttom" value="Buscar">
</form>