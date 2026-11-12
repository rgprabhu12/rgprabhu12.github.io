# Personal Website — Implementation Plan

> **Project key:** WEB
>
> **Reviewed:** 2026-11-11 · **Version:** 1.0
>
> **Status:** Implementation and acceptance evidence separated; no new external Jira issues.
>
> **Source of truth:** This file owns current epics, ticket scope, dependencies, priorities and acceptance.

## 1. Vision and outcomes

Maintain the existing Jekyll portfolio, writing and photography site with accurate project claims, a reproducible local build, accessible navigation and reviewable release evidence.

## 2. Architecture, scope and ownership

This is documentation/planning for the existing repository, not a website rebuild or deployment. Keep Jekyll/GitHub Pages source/layout/content ownership here. Current live hosting state and generated _site output are not proof of a fresh build. Public links and product recommendations require verification in their implementation tickets, not guesses in this local review.

## 3. Workflow and status conventions

Workflow: `Backlog → Ready → In Progress → Review → Done` (or `Blocked`). **Implemented** means the bounded capability exists in source; **Partial** means acceptance/build work remains; **Planned** means no complete implementation identified. Review is retrospective work awaiting acceptance, not Done. Historical accepted checks remain dated evidence; no fresh runtime validation is inferred. Ready means the bounded scope/inputs can be refined and started; dependent acceptance still gates promotion. No ticket is closed merely from file presence.

**Priority:** P0 correctness/first-result blocker; P1 core work; P2 optional/later. **Estimate:** S/M/L relative scope. Owner roles are proposed, not assignments. No services, integrations, sends, source downloads, account connections or deployments are authorized by this documentation-only review.

See [implementation evidence](implementation_status.md), [compact backlog](backlog.md) and [documentation index](README.md). Archived design references are historical; runtime guides stay active.

## 4. Jira epic index

| Epic | Name | Tickets | Evidence status |
| --- | --- | ---: | --- |
| WEB-100 | Existing site foundation and reproducible build | 3 | 1 implemented; 2 partial |
| WEB-200 | Portfolio accuracy and content governance | 3 | 1 implemented; 1 partial; 1 planned |
| WEB-300 | Navigation, accessibility and visual validation | 3 | 2 partial; 1 planned |
| WEB-400 | Release and maintenance evidence | 2 | 1 partial; 1 planned |

**Total:** 11 tickets across 4 epics. No whole epic is newly accepted complete.

## 5. Detailed ticket backlog

### EPIC WEB-100 — Existing site foundation and reproducible build

#### WEB-101 — Retain Jekyll layouts and portfolio content foundation

- **Type / priority / estimate:** Task / P1 / S
- **Status:** Review · **Implementation:** Implemented · **Owner role:** Maintainer
- **Depends on:** None
- **Implementation / remaining work:** Record homepage, projects, blog/categories, photo layouts, shared navigation/footer, Gemfile/lock and configuration as existing source.
- **Acceptance:** Key source routes map to layouts and assets; distinguish source presence from built/published status; retain existing design/content unless separately requested.
- **Current evidence:** [_config.yml](../_config.yml), [Gemfile](../Gemfile), [Gemfile.lock](../Gemfile.lock), [_layouts/projects.html](../_layouts/projects.html), [_layouts/homepage.html](../_layouts/homepage.html), [_layouts/photos.html](../_layouts/photos.html), [_layouts/blog.html](../_layouts/blog.html)

#### WEB-102 — Restore and verify a reproducible local Jekyll environment

- **Type / priority / estimate:** Task / P0 / M
- **Status:** Ready · **Implementation:** Partial · **Owner role:** Maintainer
- **Depends on:** None
- **Implementation / remaining work:** Inventory Ruby/Bundler/platform against lock; install locked gems in an isolated supported environment as a later implementation step, without rewriting the lock simply to hide incompatibilities.
- **Acceptance:** bundle check and a clean temporary-destination build pass; record tool versions, commands and missing gems/runtime constraints; no network/deploy needed for normal local content checks after installation.
- **Current evidence:** [Gemfile](../Gemfile), [Gemfile.lock](../Gemfile.lock)

#### WEB-103 — Define source/build boundaries for repository documentation

- **Type / priority / estimate:** Task / P1 / M
- **Status:** Backlog · **Implementation:** Partial · **Owner role:** Maintainer
- **Depends on:** [WEB-102](#web-102--restore-and-verify-a-reproducible-local-jekyll-environment)
- **Implementation / remaining work:** Review Jekyll exclusions so planning docs, local tools and generated output are not accidentally treated as product pages; keep source and generated artifacts distinct.
- **Acceptance:** Build output contains intended pages/assets only; docs/README/archive publication policy explicit; no unrequested URL or content changes; verify temp build without overwriting _site.
- **Current evidence:** [_config.yml](../_config.yml), [.gitignore](../.gitignore)

### EPIC WEB-200 — Portfolio accuracy and content governance

#### WEB-201 — Retain data-driven project cards and supporting routes

- **Type / priority / estimate:** Task / P1 / M
- **Status:** Review · **Implementation:** Implemented · **Owner role:** Maintainer
- **Depends on:** None
- **Implementation / remaining work:** Keep existing projects.yml-to-layout rendering, repository/dashboard placeholders and photo/blog/category entry points.
- **Acceptance:** Fields render with missing optional links safely; source content remains editable independently of templates; actual browser acceptance covered separately.
- **Current evidence:** [_data/projects.yml](../_data/projects.yml), [_layouts/projects.html](../_layouts/projects.html), [projects.md](../projects.md), [photos.md](../photos.md), [posts.md](../posts.md), [categories.md](../categories.md)

#### WEB-202 — Update portfolio claims from current repository evidence

- **Type / priority / estimate:** Task / P0 / M
- **Status:** Ready · **Implementation:** Partial · **Owner role:** Maintainer
- **Depends on:** None
- **Implementation / remaining work:** Correct football/travel/homelab stage descriptions and cover GEO/ATN without inventing public remotes, dashboards or results. Present absent extracted repos only with explicit evidence limits.
- **Acceptance:** Each published claim traces to a dated implementation summary; forecasts/scoring and scaffold/runtime distinctions correct; links verified when public; no copied secrets or private artifacts.
- **Current evidence:** [_data/projects.yml](../_data/projects.yml)

#### WEB-203 — Establish a lightweight content and project-update checklist

- **Type / priority / estimate:** Task / P1 / M
- **Status:** Backlog · **Implementation:** Planned · **Owner role:** Maintainer
- **Depends on:** [WEB-202](#web-202--update-portfolio-claims-from-current-repository-evidence)
- **Implementation / remaining work:** Define ownership of card status, project evidence, alt text/captions, draft/public distinction and a periodic stale-link/status review.
- **Acceptance:** Checklist can update one card/post without template edits; source/attribution and publication intent explicit; writing cadence not invented as a scheduled job.
- **Current evidence:** No complete implementation identified.

### EPIC WEB-300 — Navigation, accessibility and visual validation

#### WEB-301 — Audit keyboard, responsive and semantic navigation

- **Type / priority / estimate:** Task / P1 / M
- **Status:** Ready · **Implementation:** Partial · **Owner role:** Maintainer
- **Depends on:** [WEB-101](#web-101--retain-jekyll-layouts-and-portfolio-content-foundation)
- **Implementation / remaining work:** Inspect current templates for viewport zoom restrictions, image alt text, heading/landmark/closing-tag consistency, visible focus and small-screen navigation.
- **Acceptance:** Bounded source findings link actual templates; later fixes receive desktop/mobile keyboard and screen-reader checks; no claim that existing custom layouts are already fully accessible.
- **Current evidence:** [_layouts/photos.html](../_layouts/photos.html), [_layouts/homepage.html](../_layouts/homepage.html), [_layouts/blog.html](../_layouts/blog.html), [_includes/header.html](../_includes/header.html)

#### WEB-302 — Validate built routes, assets and fallback states

- **Type / priority / estimate:** Task / P1 / M
- **Status:** Backlog · **Implementation:** Planned · **Owner role:** Maintainer
- **Depends on:** [WEB-102](#web-102--restore-and-verify-a-reproducible-local-jekyll-environment), [WEB-301](#web-301--audit-keyboard-responsive-and-semantic-navigation)
- **Implementation / remaining work:** Check internal URLs, category anchors, missing images and empty project/link data against a fresh temporary build.
- **Acceptance:** Route/asset checks and representative desktop/mobile screenshots recorded; drafts excluded as intended; missing optional card links do not become broken calls to action.
- **Current evidence:** No complete implementation identified.

#### WEB-303 — Review analytics and third-party asset behavior

- **Type / priority / estimate:** Task / P2 / M
- **Status:** Backlog · **Implementation:** Partial · **Owner role:** Maintainer
- **Depends on:** [WEB-102](#web-102--restore-and-verify-a-reproducible-local-jekyll-environment)
- **Implementation / remaining work:** Record current analytics include and external image/script dependencies; assess user-facing disclosure and graceful failure according to the intended publication context.
- **Acceptance:** No false live traffic/performance claims; behavior remains usable when analytics/assets fail; change tracking/disclosure only with a concrete requirement and verification.
- **Current evidence:** [_includes/analytics.html](../_includes/analytics.html), [_config.yml](../_config.yml)

### EPIC WEB-400 — Release and maintenance evidence

#### WEB-401 — Add a repeatable build and release verification checklist

- **Type / priority / estimate:** Task / P1 / M
- **Status:** Backlog · **Implementation:** Planned · **Owner role:** Maintainer
- **Depends on:** [WEB-102](#web-102--restore-and-verify-a-reproducible-local-jekyll-environment), [WEB-202](#web-202--update-portfolio-claims-from-current-repository-evidence), [WEB-302](#web-302--validate-built-routes-assets-and-fallback-states)
- **Implementation / remaining work:** Prepare local/CI validation and a preview-to-publication checklist before deployment. Do not infer a current host/pipeline from repository naming.
- **Acceptance:** Fresh build, route/asset checks and evidence review linked to revision; preview and actual published state distinguished; publication remains an explicit separate action.
- **Current evidence:** No complete implementation identified.

#### WEB-402 — Document dependency and content maintenance decisions

- **Type / priority / estimate:** Task / P1 / M
- **Status:** Backlog · **Implementation:** Partial · **Owner role:** Maintainer
- **Depends on:** [WEB-102](#web-102--restore-and-verify-a-reproducible-local-jekyll-environment)
- **Implementation / remaining work:** Keep one active plan, backlog and status summary; document tested dependency refresh/rollback and dated known limitations.
- **Acceptance:** Lock/config changes reviewed against actual build; source history retained; generated files are not proof of successful new release; no duplicate active roadmap.
- **Current evidence:** [Gemfile.lock](../Gemfile.lock), [.gitignore](../.gitignore)

## 6. Suggested delivery sequence and gates

1. **WEB-102:** Restore and verify a reproducible local Jekyll environment. Review all dependencies before promotion.
2. **WEB-202:** Update portfolio claims from current repository evidence. Review all dependencies before promotion.
3. **WEB-301:** Audit keyboard, responsive and semantic navigation. Review all dependencies before promotion.
4. **WEB-401:** Add a repeatable build and release verification checklist. Review all dependencies before promotion.

Prioritize a bounded correctness/operating baseline before optional extensions. Split L-sized or cross-layer work into reviewable child tickets when pulled. Hardware/native/runtime checks require actual evidence; scaffolds and recorded old inventories do not satisfy those gates.

## 7. Definition of Ready

One clear outcome, relevant files, known inputs/outputs, dependency readiness, owner role and measurable acceptance. Timebox source, identity, timing, capacity or external-interface choices before implementation.

## 8. Definition of Done

- Acceptance linked to actual commands/results, revision/date and appropriate offline or isolated integration evidence.
- Source/provenance, target identity, data/time/units and missing/failure semantics explicit.
- User-facing interfaces/docs updated; no secrets, unrelated generated content or runtime data changed.
- Human review recorded, remaining hardware/runtime checks labeled, and operating/recovery instructions valid.

## 9. Jira ticket handoff template

```markdown
#### KEY-NNN — Bounded outcome
- Type / priority / estimate:
- Status / implementation evidence / owner:
- Depends on:
- Allowed files, inputs and outputs:
- Implementation and acceptance:
- Evidence, commands/results, assumptions and limitations:
- Human review and completion decision:
```
