  <main class="container py-4">

    <div class="row">
      <div class="col-12 text-center">
        <h3>Bem-vindo</h3>
      </div>
    </div>

    <div class="row my-3">
      <div class="col-8">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta molestiae, saepe modi consectetur distinctio sed, beatae iure aspernatur dolorum velit exercitationem, quasi fuga itaque fugit nobis? Optio est ipsam harum officia! Ex placeat aperiam dolorum officiis dolor debitis, hic distinctio soluta illo laudantium, reprehenderit doloribus deleniti ab veniam! Nam quaerat tenetur odio saepe? Quibusdam corporis ipsa repellendus architecto minima dolor illum doloribus quia voluptatibus provident sunt atque ea veniam ducimus, dolorem odio dolores a explicabo quisquam! Quos praesentium illum quis, molestias est repudiandae ipsam qui similique amet explicabo placeat dolorum aut quidem repellat eligendi atque rem eaque sit veritatis perferendis ipsa? Odit, ipsa rem. Molestiae inventore mollitia obcaecati blanditiis quisquam facilis architecto itaque eligendi perferendis nesciunt, neque quod iure dignissimos?
      </div>
      <div class="col-4">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem perferendis eligendi officiis quae quidem ducimus reiciendis cupiditate, aliquid voluptas totam. Asperiores tempore dolores dolor pariatur architecto tenetur, blanditiis sapiente temporibus distinctio, sunt maiores nobis iure sint error eius nisi commodi repellat veniam aliquid voluptate sed accusamus quis eaque? Officia reprehenderit aperiam excepturi quidem tenetur cum porro perferendis! Nulla, tempore aliquam?
      </div>
    </div>

    <div class="row">
      <div class="col-6">
        <img src="public/imagens//praia.png" alt="Praia" class="w-100">
      </div>
      <div class="col-6">
        <img src="public/imagens//praia.png" alt="Praia" class="w-100">
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-12 d-flex flex-wrap justify-content-center gap-4">

        <?php foreach($viagens as $v): ?>

          <div class="card" style="width: 18rem;">
            <img src="<?= $v["imagem"] ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $v["nome"] ?></h5>
              <p class="card-text"><?= $v["texto"] ?></p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

        <?php endforeach ?>

      </div>
    </div>

  </main>