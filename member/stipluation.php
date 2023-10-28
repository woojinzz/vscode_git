
    <?php include 'inc_header.php'; ?>
    
    <main class="p-5 border rounded-5">  
        <h1 class = "text-center">회원 약관 및 개인정보 취급방침 동의</h1>
        <h4>회원 약관</h4>
        <textarea name="" id="" cols="30" rows="10" class = "form-control">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores laudantium dicta iure ut repellat optio libero placeat. Maiores ipsam, porro a saepe corrupti, nemo neque odio temporibus necessitatibus iste cumque. Quaerat sunt aperiam reiciendis temporibus recusandae numquam, id ex, cum adipisci, tempore veritatis eius! Quisquam debitis totam voluptas distinctio unde dolorum dicta ea est ullam earum quasi placeat, repudiandae adipisci possimus nemo aspernatur repellat saepe similique cupiditate assumenda voluptatem sint fugit mollitia laborum. Distinctio accusantium quod earum fugit aut eum itaque? Corrupti veniam deserunt voluptates, ipsum sit recusandae harum debitis. Recusandae aliquam possimus perferendis assumenda, fugit architecto libero, harum consequuntur necessitatibus eum ab quibusdam quidem ea optio quia esse! Accusamus dolorum, distinctio mollitia asperiores eum eaque molestias et sequi inventore commodi voluptates dolores ea aspernatur numquam veritatis corrupti soluta corporis aut blanditiis laboriosam itaque. Ullam ea nihil minima temporibus vel dicta rerum labore voluptatibus, alias qui, sunt quos veniam, consequuntur optio. Optio, alias, praesentium cumque dolore illum ex natus ducimus repellendus delectus inventore excepturi dolor quasi pariatur laboriosam, expedita porro magnam debitis enim tempora nostrum? Nobis consequatur dolorem quod! Rerum nobis dolor a sit harum tempora officiis numquam. Eaque maiores fugiat deserunt rerum, libero praesentium amet iusto ad hic debitis soluta! Non, itaque porro autem quibusdam consequuntur eaque fugit odio earum, magnam veritatis accusamus reiciendis laborum voluptas, recusandae numquam dignissimos minima eos impedit ipsam enim a rem. Cum architecto quos impedit earum, iste, vitae inventore dicta aspernatur culpa blanditiis in ea molestiae sunt hic molestias necessitatibus repudiandae consequuntur, debitis temporibus dolores! Ducimus earum voluptate doloremque velit alias illum blanditiis omnis? Minus, inventore. Modi commodi accusamus culpa quia minus iusto nemo porro ab placeat deleniti saepe pariatur veniam nulla perspiciatis eligendi eius facilis ea rem enim at quisquam, quod consectetur aperiam? Earum, deserunt temporibus culpa dicta sed repellendus minima amet.
    </textarea>

    <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" value="1" id="chk_member1">
        <label class="form-check-label" for="chk_member1">
         위 약관에 동의 하시겠습니까?
        </label>
    </div>
    <h4 class = "mt-3">개인정보 취급방침</h4>
    <table></table>

    <textarea name="" id="" cols="30" rows="10" class = "form-control">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam asperiores laudantium dicta iure ut repellat optio libero placeat. Maiores ipsam, porro a saepe corrupti, nemo neque odio temporibus necessitatibus iste cumque. Quaerat sunt aperiam reiciendis temporibus recusandae numquam, id ex, cum adipisci, tempore veritatis eius! Quisquam debitis totam voluptas distinctio unde dolorum dicta ea est ullam earum quasi placeat, repudiandae adipisci possimus nemo aspernatur repellat saepe similique cupiditate assumenda voluptatem sint fugit mollitia laborum. Distinctio accusantium quod earum fugit aut eum itaque? Corrupti veniam deserunt voluptates, ipsum sit recusandae harum debitis. Recusandae aliquam possimus perferendis assumenda, fugit architecto libero, harum consequuntur necessitatibus eum ab quibusdam quidem ea optio quia esse! Accusamus dolorum, distinctio mollitia asperiores eum eaque molestias et sequi inventore commodi voluptates dolores ea aspernatur numquam veritatis corrupti soluta corporis aut blanditiis laboriosam itaque. Ullam ea nihil minima temporibus vel dicta rerum labore voluptatibus, alias qui, sunt quos veniam, consequuntur optio. Optio, alias, praesentium cumque dolore illum ex natus ducimus repellendus delectus inventore excepturi dolor quasi pariatur laboriosam, expedita porro magnam debitis enim tempora nostrum? Nobis consequatur dolorem quod! Rerum nobis dolor a sit harum tempora officiis numquam. Eaque maiores fugiat deserunt rerum, libero praesentium amet iusto ad hic debitis soluta! Non, itaque porro autem quibusdam consequuntur eaque fugit odio earum, magnam veritatis accusamus reiciendis laborum voluptas, recusandae numquam dignissimos minima eos impedit ipsam enim a rem. Cum architecto quos impedit earum, iste, vitae inventore dicta aspernatur culpa blanditiis in ea molestiae sunt hic molestias necessitatibus repudiandae consequuntur, debitis temporibus dolores! Ducimus earum voluptate doloremque velit alias illum blanditiis omnis? Minus, inventore. Modi commodi accusamus culpa quia minus iusto nemo porro ab placeat deleniti saepe pariatur veniam nulla perspiciatis eligendi eius facilis ea rem enim at quisquam, quod consectetur aperiam? Earum, deserunt temporibus culpa dicta sed repellendus minima amet.
    </textarea>

    <div class="form-check mt-2">
        <input class="form-check-input" type="checkbox" value="1" id="chk_member2">
        <label class="form-check-label" for="chk_member2">
         위 개인정보 취급방침에 동의 하시겠습니까?
        </label>
    </div>

    <div class = "mt-4 d-flex justify-content-center gap-2">
        <button class = "btn btn-primary w-50" id = "btn_member">회원가입</button>
        <button class = "btn btn-secondary w-50">가입취소</button>
    </div>

    <form method = "post" name = "stipluation_form" action = "member_input.php" style = "display:none">
        <input type = "hidden" name = "chk" value = "0">
    </form>

    </main>
    <?php include 'inc_footer.php'; ?>