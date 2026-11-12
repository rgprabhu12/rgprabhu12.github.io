# WEB implementation status and next steps

**Reviewed:** 2026-11-11. [The consolidated plan](PERSONAL_WEBSITE_PROJECT_PLAN.md) records 11 tickets across 4 epics: 2 implemented, 6 partial, 3 planned. Implementation evidence is not blanket runtime acceptance.

## Already implemented in source / recorded evidence

| Ticket | Capability | Evidence and acceptance limit |
| --- | --- | --- |
| WEB-101 | Retain Jekyll layouts and portfolio content foundation | [_config.yml](../_config.yml), [Gemfile](../Gemfile), [Gemfile.lock](../Gemfile.lock), [_layouts/projects.html](../_layouts/projects.html), [_layouts/homepage.html](../_layouts/homepage.html), [_layouts/photos.html](../_layouts/photos.html), [_layouts/blog.html](../_layouts/blog.html) Key source routes map to layouts and assets; distinguish source presence from built/published status; retain existing design/content unless separately requested. |
| WEB-201 | Retain data-driven project cards and supporting routes | [_data/projects.yml](../_data/projects.yml), [_layouts/projects.html](../_layouts/projects.html), [projects.md](../projects.md), [photos.md](../photos.md), [posts.md](../posts.md), [categories.md](../categories.md) Fields render with missing optional links safely; source content remains editable independently of templates; actual browser acceptance covered separately. |

## Partial and planned work

| Ticket | Evidence status | Remaining outcome |
| --- | --- | --- |
| WEB-102 | Partial | Restore and verify a reproducible local Jekyll environment |
| WEB-103 | Partial | Define source/build boundaries for repository documentation |
| WEB-202 | Partial | Update portfolio claims from current repository evidence |
| WEB-203 | Planned | Establish a lightweight content and project-update checklist |
| WEB-301 | Partial | Audit keyboard, responsive and semantic navigation |
| WEB-302 | Planned | Validate built routes, assets and fallback states |
| WEB-303 | Partial | Review analytics and third-party asset behavior |
| WEB-401 | Planned | Add a repeatable build and release verification checklist |
| WEB-402 | Partial | Document dependency and content maintenance decisions |

## Recommended next steps

1. **WEB-102:** Restore and verify a reproducible local Jekyll environment.
2. **WEB-202:** Update portfolio claims from current repository evidence.
3. **WEB-301:** Audit keyboard, responsive and semantic navigation.
4. **WEB-401:** Add a repeatable build and release verification checklist.

## Evidence limits and verification

- Custom layouts, content routes and project-card data are implemented in source; public live behavior was not checked.
- Earlier November 11 bundle check failed because required gems were missing; a clean build remains unverified.
- No earlier dedicated planning files were found to archive. Existing posts/drafts are content, not superseded project plans.

This review changes planning/navigation only. No live provider/DB operation, source refresh, model experiment, booking/message delivery, infrastructure change or deployment was performed. Fresh offline/source checks are listed in the verification follow-up below.

## Verification follow-up — 2026-11-11

`bundle check` still fails: required gems include github-pages, webrick, jekyll-feed and Jekyll. No build/deploy was attempted. YAML/source presence can be inspected locally; source presence does not satisfy WEB-102 runtime acceptance.

Ticket counts, backlog parity, local links, dependency references and archive navigation
are checked across repositories before handoff. Existing unrelated edits remain intact.
