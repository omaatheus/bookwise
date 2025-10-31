<div class="mt-6 grid grid-cols-2 gap-2">

    <div class="border border-stone-700 rounded p-4">
        <h1 class="border-b border-stone-700 rounded font-bold px-4 py-2">Login</h1>
        <form class= "p-4 space-y-4">
            <div class="flex flex-col"> 
                <label class="text-stone-400 mb-1">Email</label>
                <input 
                type="email" 
                name="email" required
                placeholder="Email"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"/>
            </div>
            <div class="flex flex-col"> 
                <label class="text-stone-400 mb-1">Senha</label>
                <input 
                type="password" 
                name="password" required
                placeholder="Senha"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"/>
            </div>
            <button type="submit" class="border-stone-800 bg-stone-900 px-3 py-2 rounded-md border-2 font-bold
            hover:bg-stone-800">Entrar</button>
        </form>

    </div>
     <div class="border border-stone-700 rounded p-4">
        <h1 class="border-b border-stone-700 rounded font-bold px-4 py-2">Registrar</h1>
        <form class= "p-4 space-y-4" method="POST" action="/registrar">

        <?php if( isset($mensagem) && strlen($mensagem) > 0): ?>
            <div class="border-green-800 bg-green-900 text-green px-3 py-2 rounded-md border-2 text-sm font-bold"><?=$mensagem ?></div>
        <?php endif; ?>
        <?php if( isset($_SESSION['validacoes']) && sizeof($_SESSION['validacoes'])): ?>
            <div class="border-red-800 bg-red-900 text-green px-3 py-2 rounded-md border-2 text-sm font-bold">
                <ul>
                    <li>Erros:</li>
                    <?php foreach($_SESSION['validacoes'] as $validacao): ?>
                      <li><?=$validacao ?></li>  
                      <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
            <div class="flex flex-col"> 
                <label class="text-stone-400 mb-1">Nome</label>
                <input 
                type="text" 
                name="nome" 
                placeholder="Nome"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"/>
            </div>
            <div class="flex flex-col"> 
                <label class="text-stone-400 mb-1">Email</label>
                <input 
                type="email" 
                name="email" 
                placeholder="Email"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"/>
            </div>
            <div class="flex flex-col"> 
                <label class="text-stone-400 mb-1">Email</label>
                <input 
                type="email" 
                name="email_confirmacao" 
                placeholder="Confirme seu email"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"/>
            </div>
            <div class="flex flex-col"> 
                <label class="text-stone-400 mb-1">Senha</label>
                <input 
                type="password" 
                name="password" 
                placeholder="Senha"
                class="border-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full"/>
            </div>
            <button type="reset" class="border-stone-800 bg-stone-900 px-3 py-2 rounded-md border-2 font-bold
            hover:bg-stone-800">Cancelar</button>
            <button type="submit" class="border-stone-800 bg-stone-900 px-3 py-2 rounded-md border-2 font-bold
            hover:bg-stone-800">Registrar</button>
        </form>

    </div>
    

</div>