<div class="py-5">
  <div class="row">
    <div class="col">
      <canvas
      id="chart" width="400" height="400" data-likes="2"
      ></canvas>
    </div>
    <div class="col my-5">
      <div>
        <h1>たこ焼きっておいしいですよね。</h1>
        <span class="mr-1 h5">Posted by テストユーザー</span>
        <span class="mr-1 h5">&bull;</span>
        <span class="h5">36 views</span>
      </div>
      <div class="container my-4">
        <div class="row justify-content-around">
          <div class="col-auto likes-green">
            <div class="display-1">2</div>
            <div class="h4 mb-0 text-center">賛成</div>
          </div>
          <div class="col-auto dislikes-red">
            <div class="display-1">1</div>
            <div class="h4 mb-0 text-center">反対</div>
          </div>
        </div>
      </div>
      <form action="">
        <span class="h4">あなたは賛成？それとも反対？</span>
        <input type="hidden" name="topic_id" value="3">
        <div class="form-group">
          <textarea class="w-100 border-light" name="body" id="body" rows="5">
          </textarea>
        </div>
        <div class="container">
          <div class="row h5 form-group">
            <div class="col-auto d-flex align-items-center ps-0">
              <div class="form-check-inline">
                <input
                  class="form-check-input mt-0"
                  type="radio" id="agree" name="agree"
                  value="1" checked
                >
                <label for="agree" class="form-check-label">賛成</label>
                <input
                  class="form-check-input mt-0"
                  type="radio" id="disagree" name="disagree"
                  value="0" checked
                >
                <label for="disagree" class="form-check-label col">反対</label>
              </div>
            </div>
            <input class="btn btn-success shadow col" type="submit" value="送信">
          </div>
        </div>
      </form>
      <!-- 右側 -->
    </div>
  </div>
  <h1 class="h2 mb-3">コメント</h1>
  <ul class="list-unstyled">
    <li class="bg-white rounded shadow-sm mb-3 p-3">
      <h2 class="h4 mb-2">
        <span class="badge bg-success me-2 align-bottom">賛成</span>
        <a class="text-body" href="">そのコメントに賛成です。</a>
      </h2>
      <span>Commented by テストユーザー</span>
    </li>
    <li class="bg-white rounded shadow-sm mb-3 p-3">
      <h2 class="h4 mb-2">
        <span class="badge bg-danger me-2 align-bottom">反対</span>
        <a class="text-body" href="">そのコメントに反対です。</a>
      </h2>
      <span>Commented by テストユーザー</span>
    </li>
  </ul>
</div>