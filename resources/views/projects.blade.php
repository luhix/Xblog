@extends('layouts.app')
@section('title','项目')
@section('content')
    <div class="container">
        <div id="repo-template" style="display:none">
            <div class="col col-md-4 col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="[repo.html_url]" target="_blank" class="text-dark" data-pattern-id="[repo.name]">
                                [repo.name]
                            </a>
                        </h4>
                        <p class="card-text">[repo.description]</p>
                        <small>
                            <span class="meta-item">
                            <i class="fa fa-code"></i>
                            [repo.language]
                            </span>
                            <span class="meta-item">
                            <i class="fa fa-star"></i>
                            [repo.stargazers_count]
                            </span>
                            <span class="meta-item">
                            <i class="fa fa-code-fork"></i>
                            [repo.forks_count]
                            </span>
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="projects row justify-content-center">
            <div class="center-block">
                <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                <h3>加载中...</h3>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="//cdn.bootcss.com/masonry/4.2.0/masonry.pkgd.min.js"></script>
@endsection