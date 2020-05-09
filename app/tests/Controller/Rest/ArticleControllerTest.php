<?php

namespace App\Tests\Controller\Rest;

use PHPUnit\Framework\TestCase;

/**
 * TODO:
 *  App\Controller\Rest\ArticleController - Article RESTful API in TDD
 *  (App\Tests\Controller\Rest\ArticleControllerTest corresponding unit tests):
 *      1.0:
 *          POST    /api/articles               - create one article, no error handling
 *          GET     /api/articles/{articleId}   - read one article by articleId, no error handling
 *          GET     /api/articles               - read list of articles, no filters,
 *                                                no sort by, no pagination, no error handling
 *          PUT     /api/articles/{articleId}   - update one article by articleId, no error handling
 *          DELETE  /api/articles/{articleId}   - delete one article by articleId, no error handling
 *      1.1:
 *          add error handling to all RESTful verbs - above actions
 *      2.0:
 *          GET     /api/articles/              - read list of articles with filters, sort by,
 *                                                pagination and of course (as of 1.1) error handling
*/
class ArticleControllerTest extends TestCase
{

}
